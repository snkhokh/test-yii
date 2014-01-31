<?php

/**
 * This is the model class for table "nas".
 *
 * The followings are the available columns in table 'nas':
 * @property string $id
 * @property string $ip_addr
 */
class Nas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ip_addr', 'length', 'max'=>15),
			array('name', 'length', 'max'=>50),
			array('name, ip_addr', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => 'Наименование',
			'ip_addr' => 'Ip адрес',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('name',$this->name,true);
		$criteria->compare('ip_addr',$this->ip_addr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
