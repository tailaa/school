<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\typetem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typetem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'vid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
