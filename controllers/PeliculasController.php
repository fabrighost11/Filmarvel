<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\Peliculas;
use app\models\Actores;
use app\models\FechaEstreno;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

/**
 * PeliculasController implements the CRUD actions for Peliculas model.
 */
class PeliculasController extends Controller {

    /**
     * {@inheritdoc}
     */

    public function actionConsulta1($id, $idimg, $title) {
        $dataProvider = new ActiveDataProvider([
            'query' => Peliculas::find()->where("peliculas.cod_pelicula='$id'"),
        ]);

        return $this->render("peli1", [
                    "dataProvider" => $dataProvider,
                    "id" => $id,
                    "img" => Html::img($idimg, ['class' => 'img-responsive img-border']),
                    "title" => $title,
        ]);
    }

    public function actionAtras($id, $idimg, $title) {
        $dataProvider = new ActiveDataProvider([
            'query' => Peliculas::find()->where("peliculas.cod_pelicula='$id'"),
        ]);
        $params = [
            "dataProvider" => $dataProvider,
            "campos" => ['nombre', 'presupuesto', 'n_portagonistas', 'sinopsis', 'premios_ganados', 'calificacion'],
            "img" => $idimg,
            "title" => $title,
            "id" => $id,
        ];
    
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('peli1', $params);
        } else {
            return $this->render('peli1', $params);
        }
/*         return $this->render("peli1", [
                    "dataProvider" => $dataProvider,
                    "campos" => ['nombre', 'presupuesto', 'n_portagonistas', 'sinopsis', 'premios_ganados', 'calificacion'],
                    "img" => $idimg,
                    "title" => $title,
                    "id" => $id,
        ]); */
    }

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Peliculas models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Peliculas::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peliculas model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Peliculas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Peliculas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cod_pelicula]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Peliculas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cod_pelicula]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Peliculas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peliculas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Peliculas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Peliculas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
