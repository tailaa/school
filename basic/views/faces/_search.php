<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FacesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faces-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Surname') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'DadName') ?>

    <?= $form->field($model, 'Work') ?>

    <?php // echo $form->field($model, 'KuzstuWorker') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
