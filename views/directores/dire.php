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
        <div id="main-info-section" class="box ">    
            <div class="col-lg-12 " >
                <div class="box-title">
                    <h1>Director de la pelicula <?= $nombre_pelicula->nombre ?></h1>
                </div>
                    <?php // echo $img?>
                <div class="col-lg-12 info-peli margin-top-info">
                    <div class="col-lg-3" >
                        <b>Nombre</b>
                    </div>
                    <div class="col-lg-3" >
                        <b>Telefono</b>
                    </div>
                    <div class="col-lg-3" >
                        <b>Edad</b>
                    </div>
                    <div class="col-lg-3" >
                        <b>Nacionalidad</b>
                    </div>
                    
                 <?=
                
                     ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_dire',
                        'layout' => "\n{pager}\n{items}",
                    ]);
                ?>

            </div>
            <div class="col-md-offset-0" style="margin-top:250px">
                <div class="col-lg-4 " >
                    <?= Html::a("< Atrás", ['actores-peliculas/atras', 'id' => $id, 'idimg' => $img, 'title' => $title,], ['class' => 'boton ajax-link'],) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        // Desplazarse a la sección específica al cargar la página
        window.location.hash = 'main-info-section';
    };
</script>


