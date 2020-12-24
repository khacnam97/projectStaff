<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_staff".
 *
 * @property int $id
 * @property string|null $userId
 * @property int|null $projectId
 */
class ProjectStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['projectId'], 'integer'],
            [['userId'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'projectId' => 'Project ID',
        ];
    }
}
