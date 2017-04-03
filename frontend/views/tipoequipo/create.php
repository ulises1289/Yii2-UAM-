<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipoequipo */

$this->title = 'Create Tipoequipo';
$this->params['breadcrumbs'][] = ['label' => 'Tipoequipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoequipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
