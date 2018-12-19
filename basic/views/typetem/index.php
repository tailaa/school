<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\typetemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Typetems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typetem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Typetem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_type',
            'vid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
