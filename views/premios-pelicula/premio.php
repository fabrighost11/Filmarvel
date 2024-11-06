<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;

$this->title = 'reparto';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <div class="row">
        <div class="box">    
            <div class="col-lg-12 " >
                    <div class="col-lg-12 box-title">
                        <h1 style="padding-left: 45px;">Película más premiada: <?= $nombre_pelicula->nombre ?></h1>        
                    </div>
                    <div class="col-lg-8" style=" background: inherit;margin-left: 27px;">
                        <?=
                            ListView::widget([
                                'dataProvider' => $dataProvider,
                                'itemView' => '_premio2',
                                'layout' => "\n{pager}\n{items}",
                            ]);
                        ?>
                    </div>
                    <!-- imagen de la pelicula pasada como parametro-->
                    <div class="col-lg-3">
                        <?=
                        $img2
                        ?>
                    </div>
                <div class="col-lg-12 " style="margin-top: 50px;">
                    <div class="col-lg-4" style="margin-left:0px;">
                        <?= Html::a("< Atrás", ['peliculas/atras', 'id' => $id, 'idimg' => $img, 'title' => $title], ['class' => 'boton'],) ?>
                    </div>
                    <div class="col-lg-4" style="margin-left:0px;">
                        <?= Html::a(" Ver Premios", ['premios-pelicula/prem', 'id' => $id, 'idimg' => $img, 'img2'=> $img2, 'title' => $title], ['class' => 'boton'],) ?>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
