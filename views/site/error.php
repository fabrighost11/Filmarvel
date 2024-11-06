<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <div class="site-error">

                <h1><?= Html::encode($this->title) ?></h1>

                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>

                <h5 >
                    <!--The above error occurred while the Web server was processing your request.-->
                    Un error ocurrió mientras el servidor web procesaba su solicitud.

                </h5>
                <h5>
                    <!--Please contact us if you think this is a server error. Thank you.-->
                    Contáctenos si cree que se trata de un error del servidor. Gracias.
                </h5>

            </div>
        </div>
    </div>
</div>
