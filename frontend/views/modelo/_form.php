<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estado;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Modelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreModelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->dropDownList(
    ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    ['prompt'=>'Seleccione el estado del Modelo']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
