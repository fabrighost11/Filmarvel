<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PremiosPelicula */

$this->title = 'Crear relación';
$this->params['breadcrumbs'][] = ['label' => 'Premios Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="premios-pelicula-create">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <?=
                    $this->render('_form', [
                        'model' => $model,
                    ])
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>