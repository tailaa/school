<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\typetem */

$this->title = 'Create Typetem';
$this->params['breadcrumbs'][] = ['label' => 'Typetems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typetem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
