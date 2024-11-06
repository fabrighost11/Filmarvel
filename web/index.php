<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

// Incluir tu archivo main.php que a su vez incluye otros archivos
/* require __DIR__ . '/../views/site/index.php'; */

(new yii\web\Application($config))->run();