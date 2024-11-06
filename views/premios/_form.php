<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Premios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="premios-form form-container" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_premio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['premios/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
