<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChildrensSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="childrens-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'family') ?>

    <?= $form->field($model, 'patronymic') ?>

    <?= $form->field($model, 'school') ?>

    <?php // echo $form->field($model, 'group') ?>

    <?php // echo $form->field($model, 'class') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
