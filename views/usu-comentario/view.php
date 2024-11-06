<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsuComentario */

$this->title = 'Comentario: ' . $model->usuario->usario;
$this->params['breadcrumbs'][] = ['label' => 'Usu Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="usu-comentario-view">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a("< Atrás", ['usu-comentario/index'], ['class' => 'btn btn-primary'],) ?>
                        <?= Html::a('Actualizar', ['update', 'id' => $model->id_comentario], ['class' => 'btn btn-primary']) ?>
                        <?=
                        Html::a('Eliminar', ['delete', 'id' => $model->id_comentario], [
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
                            'id_comentario',
                            'id_usuario',
                            'cod_pelicula',
                            'comentario',
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