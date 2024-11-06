<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EspectadoresPeliculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="espectadores-peliculas-form" style="background: #0E0E0E">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_espe_peli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calificacion_peli')->textInput() ?>

    <?= $form->field($model, 'valoracion_actor')->textInput() ?>

    <div class="form-group">
        <?= Html::a("< Atrás", ['espectadores-peliculas/index'], ['class' => 'btn btn-primary'],) ?>
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
