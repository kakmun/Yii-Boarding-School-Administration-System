<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Santri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="santri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wali')->textInput(['maxlength' => true]) ?>

    <!--<?//= $form->field($model, 'masuk')->textInput() ?>

    <?//= $form->field($model, 'posisi')->textInput() ?> -->

    <?= $form->field($model, 'tarif')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
