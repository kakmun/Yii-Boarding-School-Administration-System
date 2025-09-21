<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SantriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Santris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="santri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Santri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_induk',
            'nama',
            'alamat',
            'tmp_lahir',
            'tgl_lahir',
            // 'wali',
            // 'masuk',
            // 'posisi',
            // 'tarif',
            // 'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
