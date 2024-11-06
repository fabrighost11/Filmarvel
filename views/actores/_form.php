<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actores-form form-container" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dni_actor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'sexo')->dropDownList([ 'masculino' => 'Masculino', 'femenino' => 'Femenino', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valoracion_general')->textInput() ?>

    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['actores/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
