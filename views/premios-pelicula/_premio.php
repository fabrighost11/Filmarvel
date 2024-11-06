<?php
/*@var $this yii\web\view */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
?>
    <div class="col-md-offset-0 ">
        <div class="col-md-offset-0 ">
            <div class="info-peli"  >
                <b>Sinopsis: </b><p><?= $model->sinopsis ?></p>
            </div>
            <div class="info-peli"  >
                 <b>Presupuesto: </b><p><?= $model->presupuesto . "$" ?></p>
            </div>
            <div class="info-peli"  >
                 <b>Protagonistas: </b><p><?= $model->n_portagonistas ?></p>
            </div>
            <div class="info-peli"  >
                 <b>Premios: </b><p><?= $model->premios_ganados ?></p>
            </div>
            <div class="info-peli"  >
                 <b>Fecha estreno: </b><p><?= $model->fechaEstreno->fecha ?></p>
            </div>
            <div class="info-peli"  >
                 <b>Director: </b><p><?= implode('-', ArrayHelper::getColumn($model->dniDirectors, 'nombre')) ?></p>
            </div>
        </div>
    </div>