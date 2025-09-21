<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Syahriyah */

$this->title = 'Update Syahriyah: ' . $model->no_syahriyah;
$this->params['breadcrumbs'][] = ['label' => 'Syahriyahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_syahriyah, 'url' => ['view', 'id' => $model->no_syahriyah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="syahriyah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
