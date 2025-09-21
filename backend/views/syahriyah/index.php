<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SyahriyahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Syahriyahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="syahriyah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Syahriyah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_syahriyah',
            'no_induk',
            'banyak',
            'tgl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
