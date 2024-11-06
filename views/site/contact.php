<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
    
<?php    $this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row ">
            <div class="box">
                <div class="col-lg-8 justify-content-center">
                    <div class="site-contact">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                            <div class="alert alert-success">
                                Thank you for contacting us. We will respond to you as soon as possible.
                            </div>

                            <p>
                                Note that if you turn on the Yii debugger, you should be able
                                to view the mail message on the mail panel of the debugger.
                                <?php if (Yii::$app->mailer->useFileTransport): ?>
                                    Because the application is in development mode, the email is not sent but saved as
                                    a file under<br><br> <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                    application component to be false to enable email sending.
                                <?php endif; ?>
                            </p>

                        <?php else: ?>

                            <p>
                                If you have business inquiries or other questions, please fill out the following form to contact us.
                                Thank you.
                            </p>

                            <div class="row">
                                <div class="col-lg-12  ">

                                    <?php $form = ActiveForm::begin(['id' => 'contact-form',
                                        'layout' => 'horizontal',
                                        'fieldConfig' => [
                                        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-5\">{error}</div>",
                                        'labelOptions' => ['class' => 'col-lg-2 control-label'],
                                        ],
                                    ]); ?>

                                        <?= $form->field($model, 'name')->label('Nombre')->textInput(['autofocus' => true]) ?>

                                        <?= $form->field($model, 'email')->label('Correo') ?>

                                        <?= $form->field($model, 'subject')->label('Asunto') ?>

                                        <?= $form->field($model, 'body')->label('Cuerpo')->textarea(['rows' => 6]) ?>

                                        <?= $form->field($model, 'verifyCode')->label('Código de Verificación')->widget(Captcha::className(), [
                                            'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-5">{input}</div></div>',
                                        ]) ?>

                                        <div class="form-group">
                                            <div class="col-lg-2  text-center">
                                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                            </div>
                                        </div>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
</div>