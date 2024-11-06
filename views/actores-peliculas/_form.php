<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActoresPeliculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actores-peliculas-form" style="background: #0E0E0E">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_act_peli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dni_actor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::a("< Atrás", ['actores-peliculas/index'], ['class' => 'btn btn-primary'],) ?>
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
