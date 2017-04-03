<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Equipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idMarca')->textInput() ?>

    <?= $form->field($model, 'idModelo')->textInput() ?>

    <?= $form->field($model, 'idTipoEquipo')->textInput() ?>

    <?= $form->field($model, 'idEstado')->textInput() ?>

    <?= $form->field($model, 'serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecCompra')->textInput() ?>

    <?= $form->field($model, 'fecMantemiento')->textInput() ?>

    <?= $form->field($model, 'idEmpleado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
