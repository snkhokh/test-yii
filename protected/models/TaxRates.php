<?php

/**
 * This is the model class for table "tax_rates".
 *
 * The followings are the available columns in table 'tax_rates':
 * @property integer $id
 * @property string $Name
 * @property string $AbonCharge
 * @property string $TrafUnit
 * @property string $PrePayedUnits
 * @property string $dir
 * @property string $fr_1
 * @property string $to_1
 * @property string $in_ch1
 * @property string $out_ch1
 * @property string $fr_2
 * @property string $to_2
 * @property string $in_ch2
 * @property string $out_ch2
 * @property string $fr_3
 * @property string $to_3
 * @property string $in_ch3
 * @property string $out_ch3
 * @property string $fr_4
 * @property string $to_4
 * @property string $in_ch4
 * @property string $out_ch4
 * @property string $fr_5
 * @property string $to_5
 * @property string $in_ch5
 * @property string $out_ch5
 * @property string $flag
 */
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
			array('AbonCharge, TrafUnit, PrePayedUnits, in_ch1, out_ch1, in_ch2, out_ch2, in_ch3, out_ch3, in_ch4, out_ch4, in_ch5, out_ch5, flag', 'length', 'max'=>10),
			array('dir, fr_1, to_1, fr_2, to_2, fr_3, to_3, fr_4, to_4, fr_5, to_5', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, AbonCharge, TrafUnit, PrePayedUnits, dir, fr_1, to_1, in_ch1, out_ch1, fr_2, to_2, in_ch2, out_ch2, fr_3, to_3, in_ch3, out_ch3, fr_4, to_4, in_ch4, out_ch4, fr_5, to_5, in_ch5, out_ch5, flag', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Name' => 'Name',
			'AbonCharge' => 'Abon Charge',
			'TrafUnit' => 'Traf Unit',
			'PrePayedUnits' => 'Pre Payed Units',
			'dir' => 'Dir',
			'fr_1' => 'Fr 1',
			'to_1' => 'To 1',
			'in_ch1' => 'In Ch1',
			'out_ch1' => 'Out Ch1',
			'fr_2' => 'Fr 2',
			'to_2' => 'To 2',
			'in_ch2' => 'In Ch2',
			'out_ch2' => 'Out Ch2',
			'fr_3' => 'Fr 3',
			'to_3' => 'To 3',
			'in_ch3' => 'In Ch3',
			'out_ch3' => 'Out Ch3',
			'fr_4' => 'Fr 4',
			'to_4' => 'To 4',
			'in_ch4' => 'In Ch4',
			'out_ch4' => 'Out Ch4',
			'fr_5' => 'Fr 5',
			'to_5' => 'To 5',
			'in_ch5' => 'In Ch5',
			'out_ch5' => 'Out Ch5',
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
		$criteria->compare('AbonCharge',$this->AbonCharge,true);
		$criteria->compare('TrafUnit',$this->TrafUnit,true);
		$criteria->compare('PrePayedUnits',$this->PrePayedUnits,true);
		$criteria->compare('dir',$this->dir,true);
		$criteria->compare('fr_1',$this->fr_1,true);
		$criteria->compare('to_1',$this->to_1,true);
		$criteria->compare('in_ch1',$this->in_ch1,true);
		$criteria->compare('out_ch1',$this->out_ch1,true);
		$criteria->compare('fr_2',$this->fr_2,true);
		$criteria->compare('to_2',$this->to_2,true);
		$criteria->compare('in_ch2',$this->in_ch2,true);
		$criteria->compare('out_ch2',$this->out_ch2,true);
		$criteria->compare('fr_3',$this->fr_3,true);
		$criteria->compare('to_3',$this->to_3,true);
		$criteria->compare('in_ch3',$this->in_ch3,true);
		$criteria->compare('out_ch3',$this->out_ch3,true);
		$criteria->compare('fr_4',$this->fr_4,true);
		$criteria->compare('to_4',$this->to_4,true);
		$criteria->compare('in_ch4',$this->in_ch4,true);
		$criteria->compare('out_ch4',$this->out_ch4,true);
		$criteria->compare('fr_5',$this->fr_5,true);
		$criteria->compare('to_5',$this->to_5,true);
		$criteria->compare('in_ch5',$this->in_ch5,true);
		$criteria->compare('out_ch5',$this->out_ch5,true);
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
