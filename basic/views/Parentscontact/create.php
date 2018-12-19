<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Parentscontact */

$this->title = 'Create Parentscontact';
$this->params['breadcrumbs'][] = ['label' => 'Parentscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentscontact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
