<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Espectadores */

$this->title = $model->usuario;
$this->params['breadcrumbs'][] = ['label' => 'Espectadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- <div class="container"> -->
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="espectadores-view">
                    <div class="col-lg-12 box-title">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="view-create col-lg-12">
                        <?=
                        DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_usuario',
                                'contrasena_espe',
                                'usuario',
                                'pais',
                                'nombre_cine',
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
                            <p>
                                <?= Html::a("< Atrás", ['espectadores/index'], ['class' => 'btn btn-primary'],) ?>
                                <?= Html::a('Actualizar', ['update', 'id' => $model->id_usuario], ['class' => 'btn btn-primary']) ?>
                                <?=
                                Html::a('Eliminar', ['delete', 'id' => $model->id_usuario], [
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
<!-- </div> -->