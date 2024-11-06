<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personajes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personajes-form form-container" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_personaje')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dni_actor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'principal' => 'Principal', 'secundario' => 'Secundario', '' => '', ], ['prompt' => '']) ?>

    
    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['personajes/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>
</div>
