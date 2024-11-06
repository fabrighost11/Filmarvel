<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actores Peliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="box ">    
            <div class="col-lg-12 ">
                <div class="actores-peliculas-index">
                    
                        <h1><?= Html::encode($this->title) ?></h1>
                    
                    <p>
                        <?= Html::a('Crear relación', ['create'], ['class' => 'btn btn-primary']) ?>
                    </p>


                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'cod_act_peli',
                            'dni_actor',
                            'cod_pelicula',
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