<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Espectadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="espectadores-form form-container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contrasena_espe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_cine')->textInput(['maxlength' => true]) ?>

    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['espectadores/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
