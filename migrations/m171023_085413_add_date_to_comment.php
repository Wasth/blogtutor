<?php

use yii\db\Migration;

class m171023_085413_add_date_to_comment extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171023_085413_add_date_to_comment cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn(['comment','date']);
    }

    public function down()
    {
        echo "m171023_085413_add_date_to_comment cannot be reverted.\n";

        return false;
    }

}
