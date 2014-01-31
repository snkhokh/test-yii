<?php

/**
 * This is the model class for table "flags".
 *
 * The followings are the available columns in table 'flags':
 * @property string $Name
 * @property string $Data
 */
class Flags extends CActiveRecord
{
	public function tableName()
	{
		return 'flags';
	}

        public function ServerReload() {
            $rec=$this->findByAttributes(array('Name'=>'RECON'));
            $rec->Data=new CDbExpression('NOW()');
            $rec->save();
        }
        
        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
