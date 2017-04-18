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

<a href="index.php" class="buttonAtras">Ir Atrás</a>

<!-- ************************************************** -->


<div class="site-index">
    
    <div class="jumbotron">
        
        <h1>Modulo de Administrador</h1>
        <p>Se pueden crear Marcas nuevas, Estados, Modelos de equipos, etc.<br>
        Se pueden crear Departamentos de personal.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <h2>Equipos</h2>
            <div class="col-lg-4">
                <a href="index.php?r=estado/index" class="button">Estados</a>
                <a href="index.php?r=tipoequipo/index" class="button">Tipo de Equipo</a>
            </div>
            <div class="col-lg-4">
                <a href="index.php?r=marca/index" class="button">Marcas</a>
                <a href="index.php?r=modelo/index" class="button">Modelos</a>
            </div>
        </div>
        <br>
        <div class="row">
            <h2>Personal</h2>
            <div class="col-lg-4">
                <a href="index.php?r=departamento/index" class="button">Departamentos</a>
            </div>
        </div>
    </div>
</div>
