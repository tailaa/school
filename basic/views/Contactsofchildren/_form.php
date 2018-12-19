<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contactsofchildren */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactsofchildren-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_child')->textInput() ?>

    <?= $form->field($model, 'id_typeContact')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
