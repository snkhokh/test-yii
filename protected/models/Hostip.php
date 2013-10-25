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

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mask, PersonId', 'numerical', 'integerOnly'=>true),
			array('Name', 'required'),
			array('Name', 'length', 'max'=>15),
			array('int_ip, ext_ip, flags', 'length', 'max'=>10),
			array('mac', 'length', 'max'=>17),
			array('password', 'length', 'max'=>24),
			array('inact_timeout', 'length', 'max'=>2),
			array('status', 'length', 'max'=>7),
			array('ch_status', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, int_ip, ext_ip, mask, mac, PersonId, flags, password, inact_timeout, status, ch_status', 'safe', 'on'=>'search'),
		);
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
			'id' => 'ID',
			'Name' => 'Name',
			'int_ip' => 'Int Ip',
			'ext_ip' => 'Ext Ip',
			'mask' => 'Mask',
			'mac' => 'Mac',
			'PersonId' => 'Person',
			'flags' => 'Flags',
			'password' => 'Password',
			'inact_timeout' => 'Inact Timeout',
			'status' => 'Status',
			'ch_status' => 'Ch Status',
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
