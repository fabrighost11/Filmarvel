<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FechaEstreno */

$this->title = 'Fecha de Estreno: ' . $model->codPelicula->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Fecha Estrenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- <div class="container"> -->
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="fecha-estreno-view">
                    <div class="col-lg-12 box-title">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="view-create col-lg-12">
                        <?=
                        DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_estreno',
                                'cod_pelicula',
                                'fecha',
                            ],
                            'options' => [
                                "class" => [ 'view-v1 table table-bordered'
                                    /* "color" => "white",
                                    "background" => "inherit", */
                                    //                                "height" => "520px",
                                    ]
                                ],
                                ])
                        ?>
                    </div>
                    <div class=" row">
                        <div class="col-lg-3" style="margin-left:15px">
                                <?= Html::a("< Atrás", ['fecha-estreno/index'], ['class' => 'btn btn-primary'],) ?>
                                <?= Html::a('Actualizar', ['update', 'id' => $model->id_estreno], ['class' => 'btn btn-primary']) ?>
                                <?=
                                Html::a('Eliminar', ['delete', 'id' => $model->id_estreno], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => '¿Estas seguro/a de eliminar este elemento?',
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
</div>