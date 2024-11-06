<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FechaEstreno */

$this->title = 'Actualizar Fecha de Estreno: ' . $model->codPelicula->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Fecha Estrenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_estreno, 'url' => ['view', 'id' => $model->id_estreno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="fecha-estreno-update">

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