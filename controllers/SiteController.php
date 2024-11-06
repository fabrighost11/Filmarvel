<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Peliculas;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use app\models\User;
use app\models\FormRegister;
use app\models\Users;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    
    /**/
 


//    public function actionSaluda($get = "Tutorial YII"){
//        
//        $mensaje="Hola Mundo";
//        $numeros=[0,1,2,3,4,5];
//        return $this->render("saluda", ["mensaje"=>$mensaje, "array"=>$numeros, "get"=> $get ]);
//    }
//
//    public function actionFormulario($mensaje=null){
//        return $this->render("formulario", ["mensaje" => $mensaje]);
//    }
//    
//    public function actionRequest(){
//        $mensaje=null;
//        if (isset($_REQUEST["nombre"])){
//            $mensaje = "Bien, has enviado tu nombre correctamente";
//        }
//        $this->redirect(["site/formulario", "mensaje" => $mensaje]);
//    }
    
    public $layout = '@app/views/layouts/main'; // o la ruta a tu layout personalizado si es diferente

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','admin'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }   
   
 

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('index');
        }
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
      
        $model = new LoginForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            if (Yii::$app->request->isAjax) {
                return $this->renderPartial('admin', [
                    'model' => $model,
                ]);
            }

            return $this->render('admin', [
                'model' => $model,
            ]);
        }

        $model->password = '';

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('login', [
                'model' => $model,
            ]);
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }
    
  
 
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('contact', [
                'model' => $model,
            ]);
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('about');
        }
        return $this->render('about');
    }
    
    public function actionAdminview()
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('admin');
        }
        return $this->render('admin');
    }

}