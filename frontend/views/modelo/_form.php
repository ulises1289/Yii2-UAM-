<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estado;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Modelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreModelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    'language' => 'es',
    'options' => ['placeholder' => 'Seleccione una Estado'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
