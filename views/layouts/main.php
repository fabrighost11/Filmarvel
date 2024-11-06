<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>


        <!--<meta charset="utf-8">-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo Html::encode(\Yii::$app->name); ?></title>
        <link rel="icon" href="<?php echo $this->theme->baseUrl ?>/icon/logo1.ico" type="image/x-icon">


        <!-- Bootstrap 3 Core CSS -->
        <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $this->theme->baseUrl ?>/css/business-casual.css" rel="stylesheet">
        <link href="<?php echo $this->theme->baseUrl ?>/css/estilo.css" rel="stylesheet">
        <link href="<?php echo $this->theme->baseUrl ?>/css/site.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--        [if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
        
    <body>
        <?php $this->beginBody() ?>



    <header>

        <!-- Navigation -->
        <nav class="navbar navbar-default " role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
<!--                    <a class="navbar-brand" href="#"><?php // Html::encode(\Yii::$app->name); ?>Filmarvel</a>-->
                    <?= Html::a("Filmarvel", ['site/index'], ['class' => 'navbar-brand ajax-link'],) ?>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
//                    NavBar::begin(
//                            [
//                        'brandLabel' => Yii::$app->name,
//                        'brandUrl' => Yii::$app->homeUrl,
//                        'options' => [
//                            'class' => 'nav navbar-nav',
//                        ],
//                    ]
//                            );
                    if (!Yii::$app->user->isGuest) {

                        echo Nav::widget([
                            'options' => ['class' => 'nav navbar-nav '],
                            'items' => [
                                ['label' => 'Inicio', 'url' => ['site/adminview'], 'linkOptions' => ['class' => 'ajax-link']],
                                ['label' => 'Acerca de', 'url' => ['site/about'], 'linkOptions' => ['class' => 'ajax-link']],
//                                ['label' => 'Contacto', 'url' => ['site/contact']],
                                //['label' => 'Registrarse', 'url' => ['site/register']],
                                Yii::$app->user->isGuest ? (
                                        ['label' => 'Login', 'url' => ['site/login'], 'linkOptions' => ['class' => 'ajax-link']]
                                        ) : (
                                        '<li>'
                                        . Html::beginForm(['site/logout'], 'post')
                                        . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->username . ')',
                                                ['class' => ' btn btn-dark', 'style' => ['color' => 'black', 'margin-top' => '33px', 'margin-left' => '10px']]
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                        )
                            ],
                        ]);
//                        NavBar::end();
                    } else {
                        echo Nav::widget([
                            'options' => ['class' => 'nav navbar-nav '],
                            'items' => [
                                ['label' => 'Inicio', 'url' => ['site/index'], 'linkOptions' => ['class' => 'ajax-link']],
                                ['label' => 'Acerca de', 'url' => ['site/about'], 'linkOptions' => ['class' => 'ajax-link']],
                                ['label' => 'Contacto', 'url' => ['site/contact'], 'linkOptions' => ['class' => 'ajax-link']],
                                //['label' => 'Registrarse', 'url' => ['site/register']],
                                Yii::$app->user->isGuest ? (
                                        ['label' => 'Login', 'url' => ['site/login'], 'linkOptions' => ['class' => 'ajax-link']]
                                        ) : (
                                        '<li>'
                                        . Html::beginForm(['site/logout'], 'post')
                                        . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->username . ')',
                                                ['class' => ' btn btn-dark', 'style' => ['color' => 'black', 'margin-top' => '33px', 'margin-left' => '10px']]
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                        )
                            ],
                        ]);
//                        NavBar::end();
                    }
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
        <main class="main-content">
            <div id="content-container" class="container">
                <?= $content ?>
            </div>
        </main>
        <footer >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; Filmarvel 2020</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="<?= $this->theme->baseUrl ?>/js/jquery.js"></script>
        <script src="<?= $this->theme->baseUrl ?>/js/main.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000
            });
        </script>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage() ?>
