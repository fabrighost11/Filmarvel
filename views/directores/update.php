<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Directores */

$this->title = 'Actualizar Directores: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Directores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dni_director, 'url' => ['view', 'id' => $model->dni_director]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="directores-update">

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