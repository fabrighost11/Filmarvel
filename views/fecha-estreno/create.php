<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FechaEstreno */

$this->title = 'Crear Fecha de Estreno';
$this->params['breadcrumbs'][] = ['label' => 'Fecha Estrenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="container"> -->
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="fecha-estreno-create">
                    <div class="col-lg-12 box-title" >
                        <h1 style="padding-left: 45px;"><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="view-create col-lg-12">
                        <?=
                        $this->render('_form', [
                            'model' => $model,
                        ])
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>