<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuComentario */

$this->title = 'Actualizar Comentario: ' . $model->usuario->usario;
$this->params['breadcrumbs'][] = ['label' => 'Usu Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_comentario, 'url' => ['view', 'id' => $model->id_comentario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="usu-comentario-update">

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