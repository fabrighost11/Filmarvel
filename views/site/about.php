<?php
/* @var $this yii\web\View */

use yii\helpers\Html;


$this->title = 'Sobre Nosotros';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="site-about text-justify ">
                    <h1><?= Html::encode($this->title) ?></h1>

                    <h5>
                        Esta aplicación es un proyecto ideado por Fabrizzio Biancotti. Dicha app busca facilitar a los usuarios obtener información acerca de sus peliculas favoritas del Universo Cinematográfico de Marvel.
                    </h5>
                <!--<code><?php // __FILE__   ?></code>-->
                </div>
            </div>
        </div>
    </div>
</div>