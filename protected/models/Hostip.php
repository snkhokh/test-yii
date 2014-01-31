<?php

/**
 * @property boolean $flag_block 
  */
class Hostip extends CActiveRecord
{
	/**
	 * @return string the associated database table name
         *
	 */
	public function tableName()
	{
		return 'hostip';
	}
        
        public function getint_ip_s (){
            return long2ip ($this->int_ip);
        }
        public function setint_ip_s($value){
            $this->int_ip = ip2long ($value);
        }

        public function getflag_block(){
            return preg_match('/D/',$this->flags);
        }

        public function setflag_block($value){
            $tmps=preg_replace ('/D/', '',$this->flags);
            $this->flags = $value ? $tmps.'D' : $tmps;
        }

        public function gettraf_filter(){
            return preg_replace('/[^XYZ]/','',$this->flags);
        }

        public function settraf_filter($value){
           $this->flags = preg_replace ('/[XYZ]/', '',$this->flags).$value;
        }
        
        public $PName;

    public function rules() {
        return array(
            array('Name,int_ip_s,mask,password', 'required'),
            array('Name', 'unique'),
            array('Name', 'length', 'max' => 15, 'min' => 4),
            array('int_ip_s', 'match', 'pattern' => '/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/'),
            array('int_ip_s', 'UniqueIpS'),
            array('password', 'length', 'max' => 24, 'min' => 4),
            array('mask', 'numerical', 'integerOnly' => true, 'min' => 8, 'max' => 32),
            array('flag_block','boolean'),
            array('traf_filter','safe'),
            array('Name, int_ip, mac, flag_block, PName', 'safe', 'on' => 'search'),
        );
    }

    public function UniqueIpS($attr, $param) {
        $value = $this->$attr;
        $criteria = new CDbCriteria();
        $criteria->addCondition("int_ip=:p1");
        $criteria->params[':p1'] = ip2long($value);

        if ($this->isNewRecord)
            $exists = $this->exists($criteria);
        else {
            $criteria->limit = 2;
            $objects = $this->findAll($criteria);
            $n = count($objects);
            if ($n === 1) {
                // need to exclude the current record based on PK
                $exists = array_shift($objects)->getPrimaryKey() != $this->getOldPrimaryKey();
            }
            else
                $exists = $n > 1;
        }

        if ($exists) {
            $message = '{attr} "{value}" уже занят';
            $this->addError($attr, strtr($message, array(
                '{value}' => CHtml::encode($value),
                '{attr}' => $this->getAttributeLabel($attr))));
        }
    }

    /**
	 * @return array relational rules.
	 */
	public function relations()
	{
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
                        'flag_block' => 'Блокировка',
                        'traf_filter' => 'Фильтр трафика',
		);
	}

	public function search()
	{

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
