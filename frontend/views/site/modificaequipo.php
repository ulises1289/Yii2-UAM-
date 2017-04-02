<?php

/* @var $this yii\web\View */

$this->title = 'Sistema de Inventarios';
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

<a href="index.php?r=site%2Fadmininv" class="buttonAtras">Ir Atrás</a> <!-- Se usa esa direccion ya que es la que funciona con los controladores -->

<!-- ************************************************** -->

<div class="site-index">

    <div class="jumbotron">
        <h1>Modificar Equipos en el Inventario</h1>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <p> </p>
            </div>
        </div>
    </div>
</div>
