<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Actores */

$this->title = 'Crear Actores';
$this->params['breadcrumbs'][] = ['label' => 'Actores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="container"> -->
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="actores-create">
                    <div class="col-lg-12 box-title" >
                        <h1><?= Html::encode($this->title) ?></h1>
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
<!-- </div> -->