<?php

class Persons extends CActiveRecord
{
	     
        public function tableName()
	{
		return 'persons';
	}
        
        public $hostcount;
        
        public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Bill', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>50),
			array('FIO', 'length', 'max'=>150),
			array('EMail', 'length', 'max'=>100),
			array('PrePayedUnits', 'length', 'max'=>10),
			array('Flags', 'length', 'max'=>5),
			array('Opt', 'safe'),
                        array('TaxRateId','exist','attributeName'=>'id','className'=>'TaxRates'),
			array('Name, FIO, EMail, PrePayedUnits, hostcount', 'safe', 'on'=>'search'),
		);
	}
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'hosts'=>array(self::HAS_MANY, 'Hostip', 'PersonId',  'condition'=>'NOT hosts.deleted'),
                    'taxs'=>array(self::BELONGS_TO, 'TaxRates', 'TaxRateId'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Name' => 'Идентификатор',
			'FIO' => 'Персона',
			'EMail' => 'Email',
			'Bill' => 'Bill',
			'BillCh' => 'Bill Ch',
			'UnitRem' => 'Unit Rem',
			'UnitRemOut' => 'Unit Rem Out',
			'TaxRateId' => 'Трафик план',
			'PrePayedUnits' => 'Теущий лимит',
			'Flags' => 'Flags',
			'Opt' => 'Opt',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('FIO',$this->FIO,true);
		$criteria->compare('EMail',$this->EMail,true);
		$criteria->compare('Bill',$this->Bill);
		$criteria->compare('BillCh',$this->BillCh,true);
		$criteria->compare('UnitRem',$this->UnitRem,true);
		$criteria->compare('UnitRemOut',$this->UnitRemOut,true);
		$criteria->compare('TaxRateId',$this->TaxRateId);
		$criteria->compare('PrePayedUnits',$this->PrePayedUnits,true);
		$criteria->compare('Flags',$this->Flags,true);
		$criteria->compare('Opt',$this->Opt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
