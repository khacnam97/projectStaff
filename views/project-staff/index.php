<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'userId',
            'projectId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
