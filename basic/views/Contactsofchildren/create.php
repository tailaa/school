<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contactsofchildren */

$this->title = 'Create Contactsofchildren';
$this->params['breadcrumbs'][] = ['label' => 'Contactsofchildrens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactsofchildren-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
