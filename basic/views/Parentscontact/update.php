<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parentscontact */

$this->title = 'Update Parentscontact: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Parentscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parentscontact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
