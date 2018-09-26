<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180926_192719_create_table_hall_rent
 */
class m180926_192719_create_table_hall_rent extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hall_rent}}', [
            'id' => Schema::TYPE_PK,
            'customer_name' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'phone_number' => Schema::TYPE_STRING . ' NOT NULL',
            'preferences' => Schema::TYPE_TEXT,
            'application_date' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hall_rent}}');
    }
}
