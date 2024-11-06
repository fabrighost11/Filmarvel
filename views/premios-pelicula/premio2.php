<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\bootstrap\ActiveForm;

//use yii\bootstrap\ActiveField;


/* $this->title = 'peli1'; */
$this->params['breadcrumbs'][] = $this->title;
$model = new \app\models\EspectadoresPeliculas;
$form = ActiveForm::begin(['layout' => 'horizontal']);
?>

<div class="container">

    <div class="row">
        <div id="main-info-section" class="box col-md-12">    
            <div class="col-lg-12 ">
                <div class="col-lg-12 box-title">
                    <h1 style="padding-left: 45px;">Premios <?= $nombre_pelicula->nombre ?></h1>
                </div>

                <!-- gridview muestra la infomacion tambien pasada con parametros-->
                <div class="col-lg-8 info-peli margin-top-info" >

                    <div class='col-lg-6 col-md-6'>
                        <b>Nombre</b>
                    </div>  
                    <div class='col-lg-6 col-md-6'>
                        <b>Categoria</b>
                    </div>
                    
                    <?php            
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_premio2',
                        'layout' => "\n{pager}\n{items}",
                    ]);
                    ?>
                    
                </div>
                <!-- imagen de la pelicula pasada como parametro-->
                <div class="col-lg-3 margin-top-info" >
                <?=
                        $img2
                ?>
                </div>
                <!-- -->
                <!-- botones de reparto-->
                <div class="col-lg-12 col-md-12" style="margin-top:50px">
                    <div class="col-lg-4 col-md-4" >
                        <?= Html::a("< Atrás", ['peliculas/atras', 'id' => $id, 'idimg' => $img, 'title' => $title,], ['class' => 'boton ajax-link'],) ?>
                    </div>


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