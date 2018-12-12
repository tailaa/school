<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\faces */

$this->title = 'Update Faces: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Faces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
