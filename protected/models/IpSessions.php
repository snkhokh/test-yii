<?php

/**
 * This is the model class for table "ip_sessions".
 *
 * The followings are the available columns in table 'ip_sessions':
 * @property string $id
 * @property string $acct_uniq_id
 * @property string $acc_name
 * @property string $acc_uid
 * @property string $ip_pool_id
 * @property string $nas_id
 * @property string $nas_port
 * @property string $cid
 * @property string $framed_ip
 * @property string $start_time
 * @property string $l_update
 * @property string $stop_time
 * @property string $in_octets
 * @property string $out_octets
 * @property string $ses_time
 * @property string $term_cause
 */
class IpSessions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ip_sessions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acct_uniq_id, acc_name, acc_uid, ip_pool_id, nas_id, nas_port, framed_ip, start_time, l_update, in_octets, out_octets, ses_time', 'required'),
			array('acct_uniq_id', 'length', 'max'=>40),
			array('acc_name, in_octets, out_octets', 'length', 'max'=>20),
			array('acc_uid, ip_pool_id, ses_time', 'length', 'max'=>10),
			array('nas_id, nas_port', 'length', 'max'=>11),
			array('cid', 'length', 'max'=>30),
			array('framed_ip', 'length', 'max'=>15),
			array('term_cause', 'length', 'max'=>25),
			array('stop_time', 'safe'),
			array('id, acct_uniq_id, acc_name, acc_uid, ip_pool_id, nas_id, nas_port, cid, framed_ip, start_time, l_update, stop_time, in_octets, out_octets, ses_time, term_cause', 'safe', 'on'=>'search'),
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
			'acct_uniq_id' => 'Acct Uniq',
			'acc_name' => 'Acc Name',
			'acc_uid' => 'Acc Uid',
			'ip_pool_id' => 'Ip Pool',
			'nas_id' => 'Nas',
			'nas_port' => 'Nas Port',
			'cid' => 'Cid',
			'framed_ip' => 'Framed Ip',
			'start_time' => 'Start Time',
			'l_update' => 'L Update',
			'stop_time' => 'Stop Time',
			'in_octets' => 'In Octets',
			'out_octets' => 'Out Octets',
			'ses_time' => 'Ses Time',
			'term_cause' => 'Term Cause',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('acct_uniq_id',$this->acct_uniq_id,true);
		$criteria->compare('acc_name',$this->acc_name,true);
		$criteria->compare('acc_uid',$this->acc_uid,true);
		$criteria->compare('ip_pool_id',$this->ip_pool_id,true);
		$criteria->compare('nas_id',$this->nas_id,true);
		$criteria->compare('nas_port',$this->nas_port,true);
		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('framed_ip',$this->framed_ip,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('l_update',$this->l_update,true);
		$criteria->compare('stop_time',$this->stop_time,true);
		$criteria->compare('in_octets',$this->in_octets,true);
		$criteria->compare('out_octets',$this->out_octets,true);
		$criteria->compare('ses_time',$this->ses_time,true);
		$criteria->compare('term_cause',$this->term_cause,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IpSessions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
