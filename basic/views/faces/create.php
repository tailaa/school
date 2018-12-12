<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Faces */

$this->title = 'Create Faces';
$this->params['breadcrumbs'][] = ['label' => 'Faces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
