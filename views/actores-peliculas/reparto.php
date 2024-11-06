<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

$this->title = 'reparto';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <div class="row">
        <div id="main-info-section" class="box">    
            <div class="col-lg-12 " >
                <div class="box-title">
                    <h1>Reparto de la pelicula <?= $nombre_pelicula->nombre ?></h1>
                </div>
                <?php // echo $img?>
                <?php
//                GridView::widget([
//                    'dataProvider' => $resultados,
//                    'columns' => $campos,
//                    'options' => [
//                        //"id" => "nav",
//                        "style" => [
//                            "color" => "#1679C6",
//                            "background" => "inherit",
////                            "align" => "center",
//                        ]
//                    ],
//                ])
                ?>
                <!--<h1>Directores </h1>-->
                <div class="col-lg-12 info-peli margin-top-info">
                        <div class="col-lg-3 " >
                            <b><?= "Nombre  " ?></b> 
                        </div>
                        <div class="col-lg-3 ">
                            <b><?= "Edad  " ?></b> 
                        </div>
                        <div class="col-lg-3 ">
                            <b><?= "Sexo  " ?></b> 
                        </div>
                        <div class="col-lg-3 ">
                            <b><?= "Nacionalidad  " ?></b>
                        </div>
                    <?=
                        ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_reparto',
                        'layout' => "\n{pager}\n{items}",
                        ]);
                    ?>

                </div>
                <?php 
/*                GridView::widget([
                    'dataProvider' => $resultados2,
                    'columns' => $campos2,
                    'options' => [
                        "id" => "nav",
                        "style" => [
                            "color" => "#1679C6",
                            "background" => "inherit",
                            "align" => "center",
                        ]
                    ],
                ])*/
                ?>

            </div>
            <!--<div class="col-md-offset-0" style="margin-top:50px">-->
            <div class="col-lg-12 " style="margin-top: 25px;">
                <div class="col-lg-4" style="margin-left:0px;">
                    <?= Html::a("< Atrás", ['peliculas/atras','id' => $id, 'idimg' => $img, 'title' => $title] ,['class' => 'boton ajax-link'],) ?>
                </div>
                <div class="col-lg-4" style="margin-left:0px;">
                    <?= Html::a("Personajes", ['personajes/person', 'id' => $id, 'idimg' => $img, 'title' => $title, 'nombre_pelicula' => $nombre_pelicula,], ['class' => 'boton ajax-link'],) ?>
                </div>
                <div class="col-lg-4" style="margin-left:0px;">
                    <?= Html::a("Directores", ['directores/director', 'id' => $id, 'idimg' => $img, 'title' => $title, 'nombre_pelicula' => $nombre_pelicula,], ['class' => 'boton ajax-link'],) ?>
                </div>
            </div>
            <!--</div>-->
        </div>
    </div>
</div>

