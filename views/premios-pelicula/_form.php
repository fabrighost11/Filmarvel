<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PremiosPelicula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="premios-pelicula-form" style="background: #0E0E0E">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_premio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_premio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::a("< Atrás", ['premios-pelicula/index'], ['class' => 'btn btn-primary'],) ?>
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
