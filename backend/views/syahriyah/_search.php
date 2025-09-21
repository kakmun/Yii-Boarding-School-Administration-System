<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SyahriyahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="syahriyah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_syahriyah') ?>

    <?= $form->field($model, 'no_induk') ?>

    <?= $form->field($model, 'banyak') ?>

    <?= $form->field($model, 'tgl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
