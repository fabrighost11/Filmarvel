<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
?>

<div class="col-md-offset-0 ">
    <div class="col-md-offset-0 ">
        <div class="info-peli"  style="margin-bottom: 10px;">
            <b><?= "Sinopsis:  " ?></b><br> <p><?= $model->sinopsis ?></p>
        </div>
        <div class="info-peli"  style="margin-bottom: 10px;">
            <b><?= "Presupuesto:  " ?></b><br> <p><?= $model->presupuesto . "$" ?></p>
        </div>
        <div class="info-peli"  style="margin-bottom: 10px;">
            <b><?= "Numero de protagonistas:  " ?></b><br> <p><?= $model->n_portagonistas ?></p>
        </div>
        <div class="info-peli"  style="margin-bottom: 10px;">
            <b><?= "Numero premios :  " ?></b><br> <p><?= $model->premios_ganados ?></p>
        </div>


        <div class="info-peli">
            <b><?= "Fechas de estreno: "?></b><br> <p><?= $model->fechaEstreno->fecha  ?></p>

        </div>

        <div class="info-peli">
        <b><?= "Dirigido por:  " ?></b><br>
            <p><?= implode('-', ArrayHelper::getColumn($model->dniDirectors, 'nombre')) ?></p>
        </div>
    </div>
</div>
