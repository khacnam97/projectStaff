<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectStaff */

$this->title = 'Create Project Staff';
$this->params['breadcrumbs'][] = ['label' => 'Project Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
