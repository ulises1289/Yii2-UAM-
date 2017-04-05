<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estado;
use app\models\Departamento;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->dropDownList(
    ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    ['prompt'=>'Seleccione el estado del Empleado']
    )?>

    <?= $form->field($model, 'idDpto')->dropDownList(
    ArrayHelper::map(Departamento::find()->all(),'idDpto','nombreDpto'),
    ['prompt'=>'Seleccione el Departamento']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
