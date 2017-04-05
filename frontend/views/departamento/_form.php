<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Estado;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Departamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreDpto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->dropDownList(
    ArrayHelper::map(Estado::find()->all(),'idEstado','nombreEstado'),
    ['prompt'=>'Seleccione el estado del Departamento']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
