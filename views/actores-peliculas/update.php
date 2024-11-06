<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActoresPeliculas */

$this->title = 'Actualizar relación: ' . $model->codPelicula->nombre . '  /  ' . $model->dniActor->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Actores Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_act_peli, 'url' => ['view', 'id' => $model->cod_act_peli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="actores-peliculas-update">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <?=
                    $this->render('_form', [
                        'model' => $model,
                    ])
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>