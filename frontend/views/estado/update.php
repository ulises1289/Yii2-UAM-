<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Estado */

$this->title = 'Modificar Estado: ' . $model->idEstado;
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEstado, 'url' => ['view', 'id' => $model->idEstado]];
$this->params['breadcrumbs'][] = 'Update';
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

<a href="index.php?r=estado/index" class="buttonAtras">Ir Atrás</a><br><br>

<!-- ************************************************** -->

<div class="estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
