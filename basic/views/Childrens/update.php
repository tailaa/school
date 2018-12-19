<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Childrens */

$this->title = 'Update Childrens: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Childrens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="childrens-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
