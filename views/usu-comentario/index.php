<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usu Comentarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="usu-comentario-index">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>
                        <?= Html::a('Crear Comentario', ['create'], ['class' => 'btn btn-primary']) ?>
                    </p>


                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'id_comentario',
                            'id_usuario',
                            'cod_pelicula',
                            'comentario',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                        'rowOptions' => [
                            "style" => [
                                "color" => "white",
                                "background" => "#0E0E0E",
//                                "height" => "520px",
                            ]
                        ],
                        'options' => [
                            "style" => [
                                "color" => "#1679C6",
                                "background" => "#0E0E0E",
//                                "height" => "520px",
                            ]
                        ],
                    ]);
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>