<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuComentario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usu-comentario-form" style="background: #0E0E0E">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::a("< Atrás", ['usu-comentario/index'], ['class' => 'btn btn-primary'],) ?>
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
