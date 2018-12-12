<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Faces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DadName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KuzstuWorker')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
