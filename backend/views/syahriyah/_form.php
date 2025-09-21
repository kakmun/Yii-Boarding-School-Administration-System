<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Syahriyah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="syahriyah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_induk')->textInput() ?>

    <?= $form->field($model, 'banyak')->textInput() ?>

    <?= $form->field($model, 'tgl')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
