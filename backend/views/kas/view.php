<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kas */

$this->title = $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_transaksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_transaksi], [
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
            'id_transaksi',
            'tgl',
            'debet',
            'kredit',
            'ket:ntext',
        ],
    ]) ?>

</div>
