<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquipoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Equipo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php    Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idEquipo',
            [
                'attribute'=>'idMarca',
                'value'=>'idMarca0.nombreMarca',
            ],
            //'idMarca0.nombreMarca',
            [
                'attribute'=>'idModelo',
                'value'=>'idModelo0.nombreModelo',
            ],
            //'idModelo0.nombreModelo',
            [
                'attribute'=>'idTipoEquipo',
                'value'=>'idTipoEquipo0.nombreTipoEquipo',
            ],
            //'idTipoEquipo0.nombreTipoEquipo',
            [
                'attribute'=>'idEstado',
                'value'=>'idEstado0.nombreEstado',
            ],
            //'idEstado0.nombreEstado',
            'serie',
            
            [
                'attribute'=>'fecCompra',
                'value'=>'fecCompra',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'fecCompra',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]),
            ],
            
            [
                'attribute'=>'fecMantemiento',
                'value'=>'fecMantemiento',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'fecMantemiento',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]),
            ],
            
            [
                'attribute'=>'idEmpleado',
                'value'=>'idEmpleado0.nombre',
            ],
            //'idEmpleado',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
