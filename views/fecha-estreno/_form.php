<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FechaEstreno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fecha-estreno-form form-container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    
    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['fecha-estreno/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>
</div>
