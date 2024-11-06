<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PremiosPelicula */

$this->title = 'Actualizar relación: ' . $model->codPremio->nombre . '  /  ' . $model->codPelicula->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Premios Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_premio, 'url' => ['view', 'id' => $model->id_premio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="premios-pelicula-update">

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