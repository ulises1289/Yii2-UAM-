<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estado;
use app\models\Departamento;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<style> /*ESTILOS DE LOS BOTONES DE ESTA PAGINA*/
   .buttonAtras{
      -webkit-border-radius: 4;
      -moz-border-radius: 4;
      border-radius: 4px;
      font-family: Arial;
      color: black;
      font-size: 15px;
      background: #a7adba;
      padding: 10px 20px 10px 20px;
      text-decoration: none;  
    }
    
    .buttonAtras:hover {
      background: #c0c5ce;
      text-decoration: none;
    }
</style>

<!--     BOTON DE REGRESAR A LA PAGINA QUE LO LLAMA     -->

<a href="index.php?r=site%2Fadminper" class="buttonAtras">Ir Atrás</a><br><br>

<!-- ************************************************** -->

<div class="empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione una Estado'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>

    <?= $form->field($model, 'idDpto')->dropDownList(
    ArrayHelper::map(Departamento::find()->all(),'idDpto','nombreDpto'),
    ['prompt'=>'Seleccione el Departamento']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
