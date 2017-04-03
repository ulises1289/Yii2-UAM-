<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Marca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marca-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreMarca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
