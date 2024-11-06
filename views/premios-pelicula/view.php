<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PremiosPelicula */

$this->title = 'Relación: ' . $model->codPremio->nombre . '  /  ' . $model->codPelicula->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Premios Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="premios-pelicula-view">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a("< Atrás", ['premios-pelicula/index'], ['class' => 'btn btn-primary'],) ?>
                        <?= Html::a('Actualizar', ['update', 'id' => $model->id_premio], ['class' => 'btn btn-primary']) ?>
                        <?=
                        Html::a('Eliminar', ['delete', 'id' => $model->id_premio], [
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
                            'id_premio',
                            'cod_premio',
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