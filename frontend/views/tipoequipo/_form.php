<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoequipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipoequipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreTipoEquipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
