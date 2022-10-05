<?php

use yii\db\Migration;

/**
 * Class m220915_012454_statistic
 */
class m220915_012454_statistic extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('statistic', [
            'id' => $this->primaryKey(),
            'acces_time' => $this->dateTime()->notNull(),
            'user_ip' => $this->string(20)->notNull(),
            'user_host' => $this->string(50)->notNull(),
            'path_info' => $this->string(50)->notNull(),
            'query_string' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('statistic');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220915_012454_statistic cannot be reverted.\n";

        return false;
    }
    */
}
