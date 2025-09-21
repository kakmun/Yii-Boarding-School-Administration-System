<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SantriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="santri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_induk') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'ttl') ?>

    <?= $form->field($model, 'masuk') ?>

    <?php // echo $form->field($model, 'posisi') ?>

    <?php // echo $form->field($model, 'tarif') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
