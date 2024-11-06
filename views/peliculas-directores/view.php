<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PeliculasDirectores */

$this->title = ' Relación: ' . $model->codPelicula->nombre . '  /  ' . $model->dniDirector->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas Directores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="peliculas-directores-view">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a("< Atrás", ['peliculas-directores/index'], ['class' => 'btn btn-primary'],) ?>
                        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?=
                        Html::a('Eliminar', ['delete', 'id' => $model->id], [
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
                            'id',
                            'cod_pelicula',
                            'dni_director',
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