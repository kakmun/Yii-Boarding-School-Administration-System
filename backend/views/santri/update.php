<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Santri */

$this->title = 'Update Santri: ' . $model->no_induk;
$this->params['breadcrumbs'][] = ['label' => 'Santris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_induk, 'url' => ['view', 'id' => $model->no_induk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="santri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
