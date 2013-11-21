<?php

class m131121_143158_add_taxrate_description extends CDbMigration
{
	public function up()
	{
            $this->addColumn('tax_rates', 'descr', 'string');
	}

	public function down()
	{
		echo "m131121_143158_add_taxrate_description does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}