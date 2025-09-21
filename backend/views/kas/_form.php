<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl')->textInput() ?>

    <?= $form->field($model, 'debet')->textInput() ?>

    <?= $form->field($model, 'kredit')->textInput() ?>

    <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
