<?php

/**
 * This is the model class for table "ip_leased".
 *
 * The followings are the available columns in table 'ip_leased':
 * @property integer $ip
 * @property string $pool_id
 * @property string $sess_id
 * @property string $locked
 * @property integer $ttl
 */
class IpLeased extends CActiveRecord
{
        /**
         * @return string the associated database table name
         */
	public function tableName()
	{
		return 'ip_leased';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ip, pool_id, sess_id, ttl', 'required'),
			array('ip, ttl', 'numerical', 'integerOnly'=>true),
			array('pool_id', 'length', 'max'=>11),
			array('sess_id', 'length', 'max'=>10),
			array('locked', 'safe'),

                        array('ip, pool_id, sess_id, locked, ttl', 'safe', 'on'=>'search'),
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
			'ip' => 'Ip',
			'pool_id' => 'Pool',
			'sess_id' => 'Sess',
			'locked' => 'Locked',
			'ttl' => 'Ttl',
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

		$criteria->compare('ip',$this->ip);
		$criteria->compare('pool_id',$this->pool_id,true);
		$criteria->compare('sess_id',$this->sess_id,true);
		$criteria->compare('locked',$this->locked,true);
		$criteria->compare('ttl',$this->ttl);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IpLeased the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
