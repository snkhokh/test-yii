<?php


class TaxRates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tax_rates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name', 'length', 'max'=>50),
			array('TrafUnit, PrePayedUnits, flag', 'length', 'max'=>10),
			array('dir', 'filter','filter'=>array($this,'impDir')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, TrafUnit, PrePayedUnits, dir, flag', 'safe', 'on'=>'search'),
		);
	}
        public function impDir($a) {
            return implode(',', $a);
        }
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'persons'=>array(self::HAS_MANY, 'Persons', 'TaxRateId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Name' => 'Name',
			'TrafUnit' => 'Traf Unit',
			'PrePayedUnits' => 'Pre Payed Units',
			'dir' => 'Dir',
			'flag' => 'Flag',
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
		$criteria->compare('TrafUnit',$this->TrafUnit,true);
		$criteria->compare('PrePayedUnits',$this->PrePayedUnits,true);
		$criteria->compare('dir',$this->dir,true);
		$criteria->compare('flag',$this->flag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TaxRates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
