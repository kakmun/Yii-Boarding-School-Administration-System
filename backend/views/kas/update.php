<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kas */

$this->title = 'Update Kas: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
