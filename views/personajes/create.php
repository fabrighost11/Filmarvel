<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Personajes */

$this->title = 'Crear Personajes';
$this->params['breadcrumbs'][] = ['label' => 'Personajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="container"> -->
    <div class="row">
        <div class="box">    
            <div class="col-lg-12 ">
                <div class="personajes-create">
                    <div class="col-lg-12 box-title">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="col-lg-12 ">
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