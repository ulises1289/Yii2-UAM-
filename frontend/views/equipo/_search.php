<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EquipoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idEquipo') ?>

    <?= $form->field($model, 'idMarca') ?>

    <?= $form->field($model, 'idModelo') ?>

    <?= $form->field($model, 'idTipoEquipo') ?>

    <?= $form->field($model, 'idEstado') ?>

    <?php // echo $form->field($model, 'serie') ?>

    <?php // echo $form->field($model, 'fecCompra') ?>

    <?php // echo $form->field($model, 'fecMantemiento') ?>

    <?php // echo $form->field($model, 'idEmpleado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
