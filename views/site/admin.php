<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php
$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="container"> -->

    <div class="row">
        <div class="box " id="sec-0">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="https://i.imgur.com/h9SPCB0.jpg" alt="">
                        </div>
                        <div class="item ">
                            <img class="img-responsive img-full" src="https://i.imgur.com/DSHFVNA.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="https://i.imgur.com/uCvgDIZ.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Bienvenidos a</small>
                </h2>
                <h1 class="brand-name">Filmarvel</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>El fabrighost11</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <div class="row" id="sec-1">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Si te gusta la ciencia ficción únete a 
                    <strong>nosotros</strong>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="https://i.imgur.com/CB7MGDe.png" alt="">
                <hr class="visible-xs">
                <h5>La productora Marvel Studios lleva produciendo películas del universo Marvel de superhéroes  desde 2008. La primera película fue Iron Man, y desde entonces no han parado de estrenar  películas. Todas estas películas tienen continuidad entre ellas, están enlazadas, y los sucesos  que ocurren en ellas tienen repercusión en las siguientes. Esto se conoce como   Cinematográfico de Marvel (MCU por sus siglas en inglés). </h5> 
                <h5>Este ejercicio de ingeniería en cuanto a coherencia y continuidad es de  lo más aplaudido de estas películas, más allá de que las haya mejores y peores. Pero es fácil  perderse, y con esta app queremos ayudarte.</h5>
                <h5>¿Has visto todas estas películas del MCU? ¿Recuerdas su orden temporal y lo que ocurría en cada una?. En este sitio web tienes un resumen muy breve y directo de todas las películas de Marvel Studios, con su año de lanzamiento y calificación segun la experiencia de nuestros usuarios. ¡Que esperas para unirtenos!</h5>
            </div>
        </div>
    </div>
    <!--fase 1 -->
    <div class="row" id="sec-2">
        <div class="box col-md-12 col-sm-12">    
                <h1>Bienvenido al modo administrador.</h1>
                <h5>Para editar los información(tablas de la BD) de la aplicacion haz click en los botones correspondientes.</h5>
                <div class="col-md-offset-0 col-lg-12 col-lg-offset-0 col-md-12 ">    
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom " >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton1.png', ['class' => 'icono-admin', 'title' => 'Peliculas']), ['peliculas/index']); ?>
                            <h4 class="text-center">Peliculas</h4>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton2.png', ['class' => 'icono-admin', 'title' => 'Actores']), ['actores/index']); ?>
                            <h4 class="text-center">Actores</h4>
                        </div>
                    </div> 
                    <!-- <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            < Html::a(Html::img('@web/img/boton3.png', ['class' => 'icono-admin', 'title' => 'Actores peliculas']), ['actores-peliculas/index',]); ?>
                            <h4 class="text-center">Actores-Peliculas</h4>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton4.png', ['class' => 'icono-admin', 'title' => 'Directores']), ['directores/index',]); ?>
                            <h4 class="text-center">Directores</h4>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton5.png', ['class' => 'icono-admin', 'title' => 'Espectadores']), ['espectadores/index',]); ?>
                            <h4 class="text-center">Espectadores</h4>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            < Html::a(Html::img('@web/img/boton6.png', ['class' => 'icono-admin', 'title' => 'Espectadores peliculas']), ['espectadores-peliculas/index', ]); ?>
                            <h4 class="text-center">Espectadores-Peliculas</h4>
                        </div>
                    </div> --> 
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton7.png', ['class' => 'icono-admin', 'title' => 'Fecha estreno']), ['fecha-estreno/index', ]); ?>
                            <h4 class="text-center">Fecha-Estreno</h4>
                        </div>
                    </div> 
                   <!-- <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            < Html::a(Html::img('@web/img/boton8.png', ['class' => 'icono-admin', 'title' => 'Peliculas directores']), ['peliculas-directores/index', ]); ?>
                            <h4 class="text-center">Peliculas-Directores</h4>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton9.png', ['class' => 'icono-admin', 'title' => 'Personajes']), ['personajes/index', ]); ?>
                            <h4 class="text-center">Personajes</h4>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <?= Html::a(Html::img('@web/img/boton10.png', ['class' => 'icono-admin', 'title' => 'Premios']), ['premios/index', ]); ?>
                            <h4 class="text-center">Premios</h4>
                        </div>
                    </div> 
                   <!-- <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            < Html::a(Html::img('@web/img/boton11.png', ['class' => 'icono-admin', 'title' => 'Premios peliculas']), ['premios-pelicula/index', ]); ?>
                            <h4 class="text-center">Premios-Peliculas</h4>
                        </div>
                    </div>  -->
                   <!-- <div class="col-lg-3 col-md-4 col-sm-6  img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-admin">
                            <  Html::a(Html::img('@web/img/boton12.png', ['class' => 'icono-admin', 'title' => 'Comentario usuario']), ['usu-comentario/index', ]);  ?>
                            <h4 class="text-center">Usuario-Comentario</h4>
                        </div>
                    </div> -->
                </div>
        </div>
    </div>
<!-- </div> -->