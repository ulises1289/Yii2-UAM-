<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarcaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marcas';
$this->params['breadcrumbs'][] = $this->title;
?>
<style> /*ESTILOS DE LOS BOTONES DE ESTA PAGINA*/
    .button {
      -webkit-border-radius: 5;
      -moz-border-radius: 5;
      border-radius: 5px;
      font-family: Arial;
      color: #ffffff;
      font-size: 20px;
      background: #3e4349;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
    }

    .button:hover {
      background: #8e979c;
      text-decoration: none;
    }
    
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

<a href="index.php?r=site%2Fadministrador" class="buttonAtras">Ir Atrás</a><br><br>

<!-- ************************************************** -->


<div class="marca-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Marca', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php    Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model->idEstado == 1)
            {
                return ['class'=>'success'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idMarca',
            [
                'attribute'=>'idEstado',
                'value'=>'idEstado0.nombreEstado',
            ],
            'nombreMarca',
            //'idEstado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
