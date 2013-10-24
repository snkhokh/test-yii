<?php

/**
 * This is the model class for table "persons".
 *
 * The followings are the available columns in table 'persons':
 * @property integer $id
 * @property string $Name
 * @property string $FIO
 * @property string $EMail
 * @property integer $Bill
 * @property string $BillCh
 * @property string $UnitRem
 * @property string $UnitRemOut
 * @property integer $TaxRateId
 * @property string $PrePayedUnits
 * @property string $Flags
 * @property string $Opt
 */
class Persons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $hostcount;
        public function tableName()
	{
		return 'persons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Bill, TaxRateId', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>50),
			array('FIO', 'length', 'max'=>150),
			array('EMail', 'length', 'max'=>100),
			array('UnitRem, UnitRemOut, PrePayedUnits', 'length', 'max'=>10),
			array('Flags', 'length', 'max'=>5),
			array('BillCh, Opt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,Name, FIO, EMail, Bill, BillCh, UnitRem, UnitRemOut, TaxRateId, PrePayedUnits, Flags, Opt', 'safe', 'on'=>'search'),
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
                    'hosts'=>array(self::HAS_MANY, 'Hostip', 'PersonId'),
                 //   'hostcount'=>array(self::STAT,'Hostip','PersonId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
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
			'TaxRateId' => 'Тарифный план',
			'PrePayedUnits' => 'Лимит трафика',
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
		// @todo Please modify the following code to remove attributes that should not be searched.

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
