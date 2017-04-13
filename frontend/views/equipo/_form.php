<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Marca;
use app\models\Modelo;
use app\models\Tipoequipo;
use app\models\Estado;
use app\models\Empleado;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Equipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'idMarca')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Marca::find()->all(),'idMarca','nombreMarca'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione una Marca'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>
    
    <?= $form->field($model, 'idModelo')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Modelo::find()->all(),'idModelo','nombreModelo'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione un Modelo'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>
    
    <?= $form->field($model, 'idTipoEquipo')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Tipoequipo::find()->all(),'idTipoEquipo','nombreTipoEquipo'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione una Tipo de Equipo'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>
    
    <?= $form->field($model, 'idEstado')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione una Estado'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>

    <?= $form->field($model, 'serie')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'fecCompra')->widget(
    DatePicker::className(), [
        // inline too, not bad
         //'inline' => true, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    <?= $form->field($model, 'fecMantemiento')->widget(
    DatePicker::className(), [
        // inline too, not bad
        // 'inline' => true, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    
    
    <?= $form->field($model, 'idEmpleado')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Empleado::find()->all(),'idEmpleado','nombre'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione una Empleado'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
