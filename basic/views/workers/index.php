<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Workers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_worker',
            'id_type',
            'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
