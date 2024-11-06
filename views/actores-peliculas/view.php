<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ActoresPeliculas */

$this->title = 'Actualizar relación: ' . $model->codPelicula->nombre . '  /  ' . $model->dniActor->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Actores Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="actores-peliculas-view">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a("< Atrás", ['actores-peliculas/index'], ['class' => 'btn btn-primary'],) ?>
                        <?= Html::a('Actualizar', ['update', 'id' => $model->cod_act_peli], ['class' => 'btn btn-primary']) ?>
                        <?=
                        Html::a('Eliminar', ['delete', 'id' => $model->cod_act_peli], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => '¿Estas seguro/a de eliminar este elemento?',
                                'method' => 'post',
                            ],
                        ])
                        ?>
                    </p>

                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'cod_act_peli',
                            'dni_actor',
                            'cod_pelicula',
                        ],
                        'options' => [
                            "style" => [
                                "color" => "white",
                                "background" => "inherit",
//                                "height" => "520px",
                            ]
                        ],
                    ])
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>