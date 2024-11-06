<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\bootstrap\ActiveForm;

//use yii\bootstrap\ActiveField;


$this->title = 'peli1';
$this->params['breadcrumbs'][] = $this->title;
$model = new \app\models\EspectadoresPeliculas;
$form = ActiveForm::begin(['layout' => 'horizontal']);
?>

<div  class="container ">

    <div class="row">
        <div id="main-info-section" class="box col-md-12">    
            <div  class="col-lg-12 ">
                <div class="col-lg-12 box-title" >
                    <h1 style="padding-left: 45px;"><?= $title ?></h1>
                </div>
                <!-- gridview muestra la infomacion tambien pasada con parametros-->
                <div class="col-lg-8 col-md-8 margin-top-info" style=" background: inherit;margin-left: 27px;">
                    <?php
              
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_peli',
                        'layout' => "\n{pager}\n{items}",
                    ]);
                    ?>
                </div>
                <!-- -->
                <!-- imagen de la pelicula pasada como parametro-->
                <div class="col-lg-3  col-md-3 margin-top-info">
                    <?=
                    $img
                    ?>
                </div>
                <!-- botones de reparto-->
                <div class="col-lg-12 col-md-12" style="margin-top:50px">
                    <div class="col-lg-4 col-md-4" style="background:inherit ">
                        <?= Html::a("< Atrás", ['site/index'], ['class' => 'boton '],) ?>
                    </div>
                    <div class="col-lg-4 col-md-4" >
                        <?= Html::a("Reparto", ['actores-peliculas/reparto', 'id' => $id, 'idimg' => $img, 'title' => $title], ['class' => 'boton ajax-link'],) ?>
                    </div>
                    <div class="col-lg-4 col-md-4" >
                        <?= Html::a("Más Premiada", ['premios-pelicula/prem', 'id' => $id, 'idimg' => $img, 'title' => $title], ['class' => 'boton ajax-link'],) ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
