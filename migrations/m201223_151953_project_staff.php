<?php

use yii\db\Migration;

/**
 * Class m201223_151953_project_staff
 */
class m201223_151953_project_staff extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project_staff', [
            'id' => $this->primaryKey(),
            'userId' => $this->string(),
            'projectId' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_staff');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201223_151953_project_staff cannot be reverted.\n";

        return false;
    }
    */
}
