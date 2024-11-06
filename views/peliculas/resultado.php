<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\DetailView;
?>


<?=
ListView::widget([
    'dataProvider' => $resultados,
    'itemView' => 'ola',
]);
?>
