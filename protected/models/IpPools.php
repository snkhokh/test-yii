<?php

/**
 * This is the model class for table "ip_pools".
 *
 * The followings are the available columns in table 'ip_pools':
 * @property string $id
 * @property string $nas_id
 * @property string $first
 * @property string $number
 * @property integer $ttl
 * @property string $name
 */
class IpPools extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ip_pools';
	}

        public function getfirst_s (){
            return long2ip ($this->first);
        }
        public function setfirst_s($value){
            $this->first = ip2long ($value);
        }

        public function rules()
	{
		return array(
			array('first_s,number,ttl,name', 'required'),
			array('number', 'numerical', 'integerOnly'=>true,'min'=>2,'max'=>256),
			array('ttl', 'numerical', 'integerOnly'=>true,'min'=>60,'max'=>3600),
                        array('first_s', 'pullTest'),
			array('name', 'unique'),
                        array('name', 'length', 'max' => 40),
			array('id, nas_id, first, number, ttl, name', 'safe', 'on'=>'search'),
		);
	}

        public function pullTest($attr, $param)
        {
            $value = $this->first;
            if (! $value) {
                $message = 'Недействительный {attr}';
                $this->addError($attr, strtr($message, array(
                    '{attr}' => $this->getAttributeLabel($attr))));
                return;
            }
// проверка пересечения с другими пулами
            if ($this->number) {
                $criteria = new CDbCriteria();
                $criteria->addCondition("first BETWEEN :p1 AND :p2");
                $criteria->addCondition(":p1 BETWEEN first AND first+number-1",'OR');
                $criteria->params=array(':p1' => $value,':p2' => $value+$this->number-1);
                $criteria->limit = 2;
                $criteria->order = 'first';
                $objects = $this->findAll($criteria);
                if (count($objects) && !$this->isNewRecord && ($objects[0]->getPrimaryKey() == $this->getOldPrimaryKey())) array_shift($objects);
                if (count($objects)) {
                    $message = 'Пересеченире с другим пулом {ip1} - {ip2} ({numb})';
                    $this->addError($attr, strtr($message, array(
                        '{ip1}' => long2ip($objects[0]->first),
                        '{ip2}' => long2ip($objects[0]->first+$objects[0]->number-1),
                        '{numb}' => $objects[0]->number)));
                    return;
                }
            }
            // проверка пересечения со статикой
            {
                $criteria = new CDbCriteria();
                $criteria->addCondition("int_ip BETWEEN :p1 AND :p2");
                $criteria->addCondition("int_ip < :p1 AND mask < 32",'OR');
//                $criteria->compare("dynamic","<>:1");
                $criteria->order='int_ip desc';
                $criteria->params=array(':p1' => $value,':p2' => $value+$this->number-1);
                $criteria->limit = 1;
                $objects = Hostip::model()->findAll($criteria);
                if (count($objects)) {
                    if ($objects[0]->mask == 32) {
                        $message = 'Пересеченире со статическим адресом {ip}';
                        $this->addError($attr, strtr($message, array(
                            '{ip}' => long2ip($objects[0]->int_ip),
                            )));
                        return;
                    } else $r_edge = $objects[0]->int_ip+pow(2,32-$objects[0]->mask);
                    if ($value < $r_edge ) {
                        $message = 'Пересеченире со статической подсетью {ip}/{mask}';
                        $this->addError($attr, strtr($message, array(
                            '{ip}' => long2ip($objects[0]->int_ip),
                            '{mask}' => $objects[0]->mask,
                            )));
                        return;
                    }
                }
            }
        }

        public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'nas'=>array(self::BELONGS_TO,'Nas','nas_id'),
                    'leased'=>array(self::HAS_MANY,'IpLeased','pool_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nas_id' => 'Сервер доступа',
			'first_s' => 'Начальный IP адрес',
			'first' => 'Начальный IP адрес',
			'number' => 'Количество адресов',
			'ttl' => 'Время блокировки адреса',
			'name' => 'Наименование пула',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nas_id',$this->nas_id,true);
		$criteria->compare('first',$this->first,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('ttl',$this->ttl);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IpPools the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
