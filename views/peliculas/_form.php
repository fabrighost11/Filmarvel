<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peliculas-form form-container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true, ]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, ]) ?>

    <?= $form->field($model, 'presupuesto')->textInput([ ]) ?>

    <?= $form->field($model, 'n_portagonistas')->textInput([]) ?>

    <?= $form->field($model, 'sinopsis')->textarea(['rows' => 6, ]) ?>

    <?= $form->field($model, 'premios_ganados')->textInput([]) ?>

    <?= $form->field($model, 'calificacion')->textInput([]) ?>

    
    
    <div class="form-group row">
        <div class="col-lg-3">
            <?= Html::a("< Atrás", ['peliculas/index'], ['class' => 'btn btn-primary'],) ?>
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
