<?php

/**
 * This is the model class for table "hostip".
 *
 * The followings are the available columns in table 'hostip':
 * @property integer $id
 * @property string $Name
 * @property string $int_ip
 * @property string $ext_ip
 * @property integer $mask
 * @property string $mac
 * @property integer $PersonId
 * @property string $flags
 * @property string $password
 * @property string $inact_timeout
 * @property string $status
 * @property string $ch_status
 */
class Hostip extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hostip';
	}
        
        
        public function __get($name) {
            if ($name=='int_ip_s') return long2ip ($this->int_ip);
            return parent::__get($name);
        }
        
        public function __isset($name) {
            if ($name=='int_ip_s') return true;
            else return parent::__isset($name);
        }
        
        public function __set($name,$value) {
            if ($name=='int_ip_s') $this->int_ip = ip2long ($value);
            else return parent::__set($name,$value);
        }

                /**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('Name,int_ip_s,mask,password', 'required'),
			array('Name', 'unique'),
			array('Name', 'length', 'max'=>15,'min'=>4),
                        array('int_ip_s','match','pattern'=>'/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/'),
			array('int_ip_s', 'UniqueIpS'),
			array('password', 'length', 'max'=>24,'min'=>4),
			array('mask', 'numerical', 'integerOnly'=>true,'min' =>8,'max'=>32),
			array('Name, mask, mac, flags, password', 'safe', 'on'=>'search'),
		);
	}
        public function UniqueIpS($attr,$param){
            if(!$this->hasErrors())
		{
                $value = $this->$attr;
		$criteria=new CDbCriteria();
		$criteria->addCondition("int_ip=:p1");
                $criteria->params[':p1'] = ip2long($value);

		if($this->isNewRecord)
			$exists=$this->exexists($criteria);
		else
		{
			$criteria->limit=2;
			$objects=$this->findAll($criteria);
			$n=count($objects);
			if($n===1)
			{
			// need to exclude the current record based on PK
                            $exists=array_shift($objects)->getPrimaryKey()!=$this->getOldPrimaryKey();
			}
			else
				$exists=$n>1;
		}

		if($exists)
		{
                    $message='{attr} "{value}" уже занят';
                    $this->addError($attr,strtr($message,array(
                        '{value}'=>CHtml::encode($value),
                        '{attr}'=>$this->getAttributeLabel($attr))));
                    }
            }
        }

        /**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'person'=>array(self::BELONGS_TO, 'Persons', 'PersonId')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Name' => 'Идентификатор (login)',
			'int_ip_s' => 'IP адрес',
			'mask' => 'Маска IP адреса',
			'mac' => 'MAC адрес',
			'PersonId' => 'Person',
			'flags' => 'Флаги',
			'password' => 'Пароль',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('int_ip',$this->int_ip,true);
		$criteria->compare('ext_ip',$this->ext_ip,true);
		$criteria->compare('mask',$this->mask);
		$criteria->compare('mac',$this->mac,true);
		$criteria->compare('PersonId',$this->PersonId);
		$criteria->compare('flags',$this->flags,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('inact_timeout',$this->inact_timeout,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('ch_status',$this->ch_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hostip the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
