<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="actores-index">

                    <div class="col-lg-12 box-title">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>

                    <p>
                        <?php Html::a('< Atrás', ['site/admin'], ['class' => 'btn btn-primary'],) ?>
                        <?= Html::a('Crear Actores', ['create'], ['class' => 'btn btn-primary']) ?>
                    </p>


                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'dni_actor',
                            'nombre',
                            'edad',
                            'sexo',
                            'nacionalidad',
                            //'valoracion_general',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                        'rowOptions' => [
                            "style" => [
                                "color" => "white",
                                "background" => "#0E0E0E",
//                                "height" => "520px",
                            ]
                        ],
                        'options' => [
                            "style" => [
                                "color" => "#1679C6",
                                "background" => "#0E0E0E",
//                                "height" => "520px",
                            ]
                        ],
                    ]);
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>