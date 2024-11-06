<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EspectadoresPeliculas */

$this->title = 'Actualizar relación: ' . $model->codPelicula->nombre . '  /  ' . $model->usuario->usuario;
$this->params['breadcrumbs'][] = ['label' => 'Espectadores Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_espe_peli, 'url' => ['view', 'id' => $model->id_espe_peli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="espectadores-peliculas-update">

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