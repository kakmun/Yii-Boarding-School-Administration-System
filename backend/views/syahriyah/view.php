<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Syahriyah */

$this->title = $model->no_syahriyah;
$this->params['breadcrumbs'][] = ['label' => 'Syahriyahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="syahriyah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_syahriyah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_syahriyah], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_syahriyah',
            'no_induk',
            'banyak',
            'tgl',
        ],
    ]) ?>

</div>
