<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeliculasDirectores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peliculas-directores-form form-container" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_pelicula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dni_director')->textInput(['maxlength' => true]) ?>

    
</div>
<div class="form-group row">
    <div class="col-lg-1">
        <?= Html::a("< Atrás", ['peliculas-directores/index'], ['class' => 'btn btn-primary'],) ?>
    </div>
    <div class="col-lg-1">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
