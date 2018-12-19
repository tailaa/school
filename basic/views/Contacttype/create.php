<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contacttype */

$this->title = 'Create Contacttype';
$this->params['breadcrumbs'][] = ['label' => 'Contacttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacttype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
