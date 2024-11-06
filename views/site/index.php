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

<div class="comtainer">
    <div class="row">
        <div class="box" id="sec-0">
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
                    <div class=" mt-2"><small>El sitio indicado para saber todo sobre el mcu</small></div>
                    <small>By
                        <strong>FabriDev</strong>
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
        <div class="box col-md-12">    
            <!-- <div class="col-lg-12 "> -->
                <h1>Primera fase del universo</h1>
                <div class="col-md-offset-0 col-lg-12 col-lg-offset-0 col-md-12" > 
                    
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                            <?= Html::a(Html::img('@web/img/iron-man.jpg', ['class' => 'img-responsive img-border ', 'title' => 'Iron Man']), ['peliculas/consulta1', 'id' => 'pp1', 'idimg' => '@web/img/iron-man.jpg', 'title' => 'Iron Man']); ?>
                            <h5 class="text-center">Iron Man</h5>
                        </div>
                    </div> 

                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                            <?= Html::a(Html::img('@web/img/hulk.jpg', ['class' => 'img-responsive img-border', 'title' => 'The incredible hulk']), ['peliculas/consulta1', 'id' => 'pp2', 'idimg' => '@web/img/hulk.jpg', 'title' => 'The incredible hulk']); ?>
                            <h5 class="text-center">The incredible hulk</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                            <?= Html::a(Html::img('@web/img/iron-man-2.jpg', ['class' => 'img-responsive img-border', 'title' => 'The incredible hulk']), ['peliculas/consulta1', 'id' => 'pp3', 'idimg' => '@web/img/iron-man-2.jpg', 'title' => 'Iron Man 2']); ?>
                            <h5 class="text-center">Iron Man 2</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >                        
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                            <?= Html::a(Html::img('@web/img/thor.jpg', ['class' => 'img-responsive img-border', 'title' => 'Thor']), ['peliculas/consulta1', 'id' => 'pp4', 'idimg' => '@web/img/thor.jpg', 'title' => 'Thor']); ?>
                            <h5 class="text-center">Thor</h5>
                        </div>
                    </div>
<!--                 </div>
                <div class="col-md-offset-0 col-lg-12 col-lg-offset-0"> --> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                            <?= Html::a(Html::img('@web/img/capi.jpg', ['class' => 'img-responsive img-border', 'title' => 'Captain America: The first avenger']), ['peliculas/consulta1', 'id' => 'pp5', 'idimg' => '@web/img/capi.jpg', 'title' => 'Captain America: The first avenger']); ?>
                            <h5 class="text-center">Captain America: The first avenger</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100">
                            <?= Html::a(Html::img('@web/img/avengers.jpg', ['class' => 'img-responsive img-border ', 'title' => 'Avengers']), ['peliculas/consulta1', 'id' => 'pp6', 'idimg' => '@web/img/avengers.jpg', 'title' => 'Avengers']); ?>
                            <h5 class="text-center">Avengers</h5>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- fase 2 -->
    <div class="row" id="sec-3">
        <div class="box col-lg-12 col-md-12">    
            <!-- <div class="col-lg-12"> -->
                <h1>Segunda fase del universo</h1>
                <div class="col-md-offset-0 col-md-12 col-lg-12 col-lg-offset-0 " > 
                    
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/iron-man-3.jpg', ['class' => 'img-responsive img-border', 'title' => 'Iron Man 3']), ['peliculas/consulta1', 'id' => 'pp7', 'idimg' => '@web/img/iron-man-3.jpg', 'title' => 'Iron Man 3']); ?>
                            <h5 class="text-center">Iron Man 3</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/thor-dark-world.jpg', ['class' => 'img-responsive img-border', 'title' => 'Thor: The dark world']), ['peliculas/consulta1', 'id' => 'pp8', 'idimg' => '@web/img/thor-dark-world.jpg', 'title' => 'Thor: The dark world']); ?>
                            <h5 class="text-center">Thor: The dark world</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/capi-2.jpg', ['class' => 'img-responsive img-border', 'title' => 'Captain America: The winter soldier']), ['peliculas/consulta1', 'id' => 'pp9', 'idimg' => '@web/img/capi-2.jpg', 'title' => 'Captain America: The winter soldier']); ?>
                            <h5 class="text-center">Captain America: The winter soldier</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/guardians.jpg', ['class' => 'img-responsive img-border', 'title' => 'Guardians of the galaxy']), ['peliculas/consulta1', 'id' => 'p10', 'idimg' => '@web/img/guardians.jpg', 'title' => 'Guardians of the galaxy']); ?>
                            <h5 class="text-center">Guardians of the galaxy</h5>
                        </div>
                    </div>
<!--                 </div>
                <div class="col-md-offset-0 col-lg-12">  -->
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/avengers-2.jpg', ['class' => 'img-responsive img-border', 'title' => 'Avengers: Age of Ultron']), ['peliculas/consulta1', 'id' => 'p11', 'idimg' => '@web/img/avengers-2.jpg', 'title' => 'Avengers: Age of Ultron']); ?>
                            <h5 class="text-center">Avengers: Age of Ultron</h5>
                        </div>
                    </div>     
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/ant-man.jpg', ['class' => 'img-responsive img-border', 'title' => 'Ant-Man']), ['peliculas/consulta1', 'id' => 'p12', 'idimg' => '@web/img/ant-man.jpg', 'title' => 'Ant-Man']); ?>
                            <h5 class="text-center">Ant-Man</h5>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- fase 3-->
    <div class="row" id="sec-4">
        <div class="box col-md-12">    
           <!--  <div class="col-lg-12"> -->
                <h1>Tercera fase del universo</h1>
                <div class="col-md-offset-0 col-lg-12 col-lg-offset-0 col-md-12"> 

                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/civil-war.jpg', ['class' => 'img-responsive img-border', 'title' => 'Avengers: Civil War']), ['peliculas/consulta1', 'id' => 'p13', 'idimg' => '@web/img/civil-war.jpg', 'title' => 'Avengers: Civil War']); ?>
                            <h5 class="text-center">Avengers: Civil War</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/dc_strange.jpg', ['class' => 'img-responsive img-border', 'title' => 'Doctor Strange']), ['peliculas/consulta1', 'id' => 'p14', 'idimg' => '@web/img/dc_strange.jpg', 'title' => 'Doctor Strange']); ?>
                            <h5 class="text-center">Doctor Strange</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/guardians-2.jpg', ['class' => 'img-responsive img-border', 'title' => 'Guardians Of The Galaxy Vol.2']), ['peliculas/consulta1', 'id' => 'p15', 'idimg' => '@web/img/guardians-2.jpg', 'title' => 'Guardians Of The Galaxy Vol.2']); ?>
                            <h5 class="text-center">Guardians Of The Galaxy Vol.2</h5>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/spide.jpg', ['class' => 'img-responsive img-border', 'title' => 'Spider-mar Homecoming']), ['peliculas/consulta1', 'id' => 'p16', 'idimg' => '@web/img/spide.jpg', 'title' => 'Spider-mar: Homecoming']); ?>
                            <h5 class="text-center">Spider-mar: Homecoming</h5>
                        </div>
                    </div> 
<!--                 </div>
                <div class="col-md-offset-0 col-lg-12">  -->
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/Thor_Ragnarok.png', ['class' => 'img-responsive img-border', 'title' => 'Thor Ragnarok']), ['peliculas/consulta1', 'id' => 'p17', 'idimg' => '@web/img/Thor_Ragnarok.png', 'title' => 'Thor Ragnarok']); ?>
                            <h5 class="text-center">Thor Ragnarok</h5>
                        </div>
                    </div>     
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/black.jpg', ['class' => 'img-responsive img-border', 'title' => 'Black Panther']), ['peliculas/consulta1', 'id' => 'p18', 'idimg' => '@web/img/black.jpg', 'title' => 'Black Panther']); ?>
                            <h5 class="text-center">Black Panther</h5>
                        </div>
                    </div>     
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/infinite-war.jpg', ['class' => 'img-responsive img-border', 'title' => 'Avengers: Infinite War']), ['peliculas/consulta1', 'id' => 'p19', 'idimg' => '@web/img/infinite-war.jpg', 'title' => 'Avengers: Infinite War']); ?>
                            <h5 class="text-center">Avengers: Infinite War</h5>
                        </div>
                    </div>     
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/ant-man-2.jpg', ['class' => 'img-responsive img-border', 'title' => 'Ant-Man And The Wasp']), ['peliculas/consulta1', 'id' => 'p20', 'idimg' => '@web/img/ant-man-2.jpg', 'title' => 'Ant-Man And The Wasp']); ?>
                            <h5 class="text-center">Ant-Man And The Wasp</h5>
                        </div>
                    </div>
<!--                 </div>
                <div class="col-md-offset-0 col-lg-12"> --> 
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/marvel.jpg', ['class' => 'img-responsive img-border', 'title' => 'Captain Marvel']), ['peliculas/consulta1', 'id' => 'p21', 'idimg' => '@web/img/marvel.jpg', 'title' => 'Captain Marvel']); ?>
                            <h5 class="text-center">Captain Marvel</h5>
                        </div>
                    </div>     
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/endgame.jpg', ['class' => 'img-responsive img-border', 'title' => 'Avengers: Endgame']), ['peliculas/consulta1', 'id' => 'p22', 'idimg' => '@web/img/endgame.jpg', 'title' => 'Avengers: Endgame']); ?>
                            <h5 class="text-center">Avengers: Endgame</h5>
                        </div>
                    </div>     
                    <div class="col-lg-3 col-md-4 img-efecto1 margin-custom" >
                        <div class="d-flex flex-column align-items-center justify-content-center w-100 h-100-index">
                            <?= Html::a(Html::img('@web/img/spide-2.jpg', ['class' => 'img-responsive img-border', 'title' => 'Spider-Man Far From Home']), ['peliculas/consulta1', 'id' => 'p23', 'idimg' => '@web/img/spide-2.jpg', 'title' => 'Spider-Man: Far From Home']); ?>
                            <h5 class="text-center">Spider-Man: Far From Home</h5>
                        </div>
                    </div> 
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>
