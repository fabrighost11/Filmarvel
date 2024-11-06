<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>

<?php    $this->title = 'login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">    
    <div class="row">
            <div class="box">
                <div class="col-lg-12 ">
                    <div class="site-login " >
                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>Rellena los siguientes campos para iniciar sesión:</p>

                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'layout' => 'horizontal',
                            'fieldConfig' => [
                                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                'labelOptions' => ['class' => 'col-lg-1 control-label'],
                            ],
                        ]); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            ]) ?>

                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-11">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>
                            </div>

                        <?php ActiveForm::end(); ?>

                        <div class="col-lg-offset-1" style="color:#999;">
                            Puedes iniciar sesión como administrador con: <strong>admin/admin</strong> <!-- or <strong>demo/demo</strong>.<br>-->
                            <!--To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    

