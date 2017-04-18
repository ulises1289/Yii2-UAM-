<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoequipo */

$this->title = 'Modificar Tipoequipo: ' . $model->idTipoEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Tipoequipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTipoEquipo, 'url' => ['view', 'id' => $model->idTipoEquipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoequipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
