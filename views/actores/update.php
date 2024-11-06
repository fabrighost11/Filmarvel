<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Actores */

$this->title = 'Actualizar Actores: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Actores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dni_actor, 'url' => ['view', 'id' => $model->dni_actor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="actores-update">

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