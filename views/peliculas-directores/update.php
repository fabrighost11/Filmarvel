<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PeliculasDirectores */

$this->title = 'Actualizar relación: ' . $model->codPelicula->nombre . '  /  ' . $model->dniDirector->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas Directores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="peliculas-directores-update">

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