<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- <div class="container"> -->
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="peliculas-view ">
                    <div class="col-lg-12 box-title">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="view-create col-lg-12">
                        <?=
                        DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'cod_pelicula',
                                'nombre',
                                'presupuesto',
                                'n_portagonistas',
                                'sinopsis:ntext',
                                'premios_ganados',
                                'calificacion',
                            ],
                            'options' => [
                                "class" => [ 'view-v1 table table-bordered'
                                    /* "color" => "white",
                                    "background" => "ineriht", */
                                    //                                "height" => "520px",
                                    ]
                                ],
                                ])
                        ?>
                    </div>
                    <div class=" row">
                        <div class="col-lg-3" style="margin-left:15px">
                            <?= Html::a("< Atrás", ['peliculas/index'], ['class' => 'btn btn-primary'],) ?>
                        
                            <?= Html::a('Actualizar', ['update', 'id' => $model->cod_pelicula], ['class' => 'btn btn-primary']) ?>
                        
                            <?=
                            Html::a('Eliminar', ['delete', 'id' => $model->cod_pelicula], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                     'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ])
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- </div> -->