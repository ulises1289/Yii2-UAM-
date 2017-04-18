<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoequipo */

$this->title = $model->idTipoEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Tipoequipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoequipo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idTipoEquipo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idTipoEquipo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idTipoEquipo',
            'nombreTipoEquipo',
            'idEstado',
        ],
    ]) ?>

</div>
