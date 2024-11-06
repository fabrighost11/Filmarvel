<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Premios */

$this->title = 'Actualizar Premios: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Premios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_premio, 'url' => ['view', 'id' => $model->cod_premio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="premios-update">

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