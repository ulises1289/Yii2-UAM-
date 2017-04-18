<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departamento */

$this->title = 'Modificar Departamento: ' . $model->idDpto;
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDpto, 'url' => ['view', 'id' => $model->idDpto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<style> /*ESTILOS DE LOS BOTONES DE ESTA PAGINA*/
    
    
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

<a href="index.php?r=departamento/index" class="buttonAtras">Ir Atrás</a><br><br>

<!-- ************************************************** -->


<div class="departamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
