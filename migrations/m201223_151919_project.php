<?php

use yii\db\Migration;

/**
 * Class m201223_151919_project
 */
class m201223_151919_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'projectManagerId' => $this->integer(),
            'description' => $this->string(),
            'createDate' => $this->datetime(),
            'updateDate' => $this->datetime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201223_151919_project cannot be reverted.\n";

        return false;
    }
    */
}
