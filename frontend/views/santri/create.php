<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Santri\Santri */

$this->title = 'Create Santri';
$this->params['breadcrumbs'][] = ['label' => 'Santris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="santri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
