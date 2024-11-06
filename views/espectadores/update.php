<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Espectadores */

$this->title = 'Actualizar Espectadores: ' . $model->usuario;
$this->params['breadcrumbs'][] = ['label' => 'Espectadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_usuario, 'url' => ['view', 'id' => $model->id_usuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="espectadores-update">

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