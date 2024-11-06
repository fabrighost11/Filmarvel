<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EspectadoresPeliculas */

$this->title = 'Relación: ' . $model->codPelicula->nombre . '  /  ' . $model->usuario->usuario;
$this->params['breadcrumbs'][] = ['label' => 'Espectadores Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="espectadores-peliculas-view">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a("< Atrás", ['espectadores-peliculas/index'], ['class' => 'btn btn-primary'],) ?>
                        <?= Html::a('Actualizar', ['update', 'id' => $model->id_espe_peli], ['class' => 'btn btn-primary']) ?>
                        <?=
                        Html::a('Eliminar', ['delete', 'id' => $model->id_espe_peli], [
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
                            'id_espe_peli',
                            'cod_pelicula',
                            'id_usuario',
                            'calificacion_peli',
                            'valoracion_actor',
                        ],
                        'options' => [
                            "style" => [
                                "color" => "white",
                                "background" => "#0E0E0E",
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