<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
?>


  
    <div class="col-lg-3 margin-top-info " >
        <p><?= implode('-', ArrayHelper::getColumn($model->dniDirectors, 'nombre')) ?></p>
    </div>
    <div class='col-lg-3 margin-top-info' >
        <p><?= implode('-', ArrayHelper::getColumn($model->dniDirectors, 'telefono')) ?></p>
    </div>
    <div class='col-lg-3 margin-top-info' >
        <p><?= implode('-', ArrayHelper::getColumn($model->dniDirectors, 'edad')) ?></p>
    </div>
    <div class='col-lg-3 margin-top-info' >
        <p><?= implode('-', ArrayHelper::getColumn($model->dniDirectors, 'nacionalidad')) ?></p>
    </div>

