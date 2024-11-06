<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'elenco';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <h1>Actores</h1>


                <div class="col-lg-3 " style="margin-top: 20px; float: right">
                    <?php/*
                    $img
                    */?>
                </div> 
            <!--    <p>La productora Marvel Studios lleva produciendo películas del universo Marvel de superhéroes desde 2008. La primera película fue Iron Man, y desde entonces no han parado de estrenar películas. Todas estas películas tienen continuidad entre ellas, están enlazadas, y los sucesos que ocurren en ellas tienen repercusión en las siguientes. Esto se conoce como Universo Cinematográfico de Marvel (MCU por sus siglas en inglés).</p>
                <p>Este ejercicio de ingeniería en cuanto a coherencia y continuidad es de lo más aplaudido de estas películas, más allá de que las haya mejores y peores. Pero es fácil perderse, y con este post queremos ayudarte.</p>
                <p>¿Has visto todas estas películas del MCU? ¿Recuerdas su orden temporal y lo que ocurría en cada una?. En este sitio web tienes un resumen muy breve y directo de todas las películas de Marvel Studios, con su año de lanzamiento y calificación segun la experiencia de nuestros usuarios. ¡Que esperas para unirtenos!</p>
                -->
                
                    <?=
                    GridView::widget([
                        'dataProvider' => $resultados,
                        'columns' => $campos,
                        'options' => [
                            //"id" => "nav",
                            "style" => [
                                "color" => "#1679C6",
                                "background" => "inhert",
                                "align" => "center",
                            ]
                        ],
                    ])
                    ?>
               
                
            </div>

        </div>
    </div>
</div>

