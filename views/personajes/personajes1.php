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
                    <h1>Personajes de la pelicula <?= $nombre_pelicula->nombre ?></h1>
                </div>   
                <div class="col-lg-12 info-peli margin-top-info">
                    <?php // echo $img?>
                    <div class="col-lg-4" >
                        <h4>Actor/iz</h4>
                    </div>
                    <div class="col-lg-4" >
                        <h4>Personaje</h4>
                    </div>
                    <div class="col-lg-4" >
                        <h4>Principal/Secundario</h4>
                    </div>
                    <?=
                    
                        ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_personajes',
                            'layout' => "\n{pager}\n{items}",
                        ]);
                    ?>
                </div>
            </div>
            <div class="col-md-offset-0" style="margin-top:50px">
                <div class="col-lg-4 " >
                    <?= Html::a("< Atrás", ['actores-peliculas/atras', 'id' => $id, 'idimg' => $img, 'title' => $title,], ['class' => 'boton ajax-link'],) ?>
                </div>
            </div>
        </div>
    </div>
</div>



