<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Santri */

$this->title = $model->no_induk;
$this->params['breadcrumbs'][] = ['label' => 'Santris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="santri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_induk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_induk], [
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
            'no_induk',
            'nama',
            'alamat',
            'tmp_lahir',
            'tgl_lahir',
            'wali',
            'masuk',
            'posisi',
            'tarif',
            'foto',
        ],
    ]) ?>

</div>
