<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */

$this->title = 'Actualiza Peliculas: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_pelicula, 'url' => ['view', 'id' => $model->cod_pelicula]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="peliculas-update">
                    <div class="col-lg-12 box-title">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="col-lg-12">
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
</div>