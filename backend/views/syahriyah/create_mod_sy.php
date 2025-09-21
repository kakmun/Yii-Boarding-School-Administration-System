<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Syahriyah */

$this->title = 'Create Syahriyah';
$this->params['breadcrumbs'][] = ['label' => 'Syahriyahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="syahriyah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
