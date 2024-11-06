<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Personajes */

$this->title = 'Actualizar Personajes: ' . $model->nombre . '  /  ' . $model->dniActor->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Personajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_personaje, 'url' => ['view', 'id' => $model->id_personaje]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="personajes-update">

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