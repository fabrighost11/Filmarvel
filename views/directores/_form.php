<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Directores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directores-form form-container" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dni_director')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    
    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['directores/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
