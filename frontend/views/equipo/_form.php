<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Marca;
use app\models\Modelo;
use app\models\Tipoequipo;
use app\models\Estado;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Equipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idMarca')->dropDownList(
    ArrayHelper::map(Marca::find()->all(),'idMarca','nombreMarca'),
    ['prompt'=>'Seleccione Marca']
    )?>

    <?= $form->field($model, 'idModelo')->dropDownList(
    ArrayHelper::map(Modelo::find()->all(),'idModelo','nombreModelo'),
    ['prompt'=>'Seleccione Modelo']
    )?>

    <?= $form->field($model, 'idTipoEquipo')->dropDownList(
    ArrayHelper::map(Tipoequipo::find()->all(),'idTipoEquipo','nombreTipoEquipo'),
    ['prompt'=>'Seleccione Tipo de Equipo']
    )?>

    <?= $form->field($model, 'idEstado')->dropDownList(
    ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    ['prompt'=>'Seleccione el estado del Equipo']
    )?>

    <?= $form->field($model, 'serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecCompra')->textInput()?>

    <?= $form->field($model, 'fecMantemiento')->textInput() ?>

    <?= $form->field($model, 'idEmpleado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
