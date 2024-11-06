<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use app\models\ActoresPeliculas;
use app\models\Personajes;
use app\models\Actores;
use app\models\Directores;
use app\models\PeliculasDirectores;
use app\models\Peliculas;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ActoresPeliculasController implements the CRUD actions for ActoresPeliculas model.
 */
class ActoresPeliculasController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function actionReparto($id, $idimg, $title){
        $nombre_pelicula = Peliculas::findOne($id);
        $dataProvider = new ActiveDataProvider([
            'query' => ActoresPeliculas::find()->where("actores_peliculas.cod_pelicula='$id'"),
     
        ]); 

        $params = [
            "dataProvider" => $dataProvider,
            "id" => $id,
            "img" => $idimg,
            "title" => $title,
            "nombre_pelicula" => $nombre_pelicula,
        ];

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('reparto', $params);
        } else {
            return $this->render('reparto', $params);
        }
/*           return $this->render("reparto",[
           "dataProvider" => $dataProvider,
            "id" => $id,
            "img" => $idimg,
            "title" => $title,
            "nombre_pelicula" => $nombre_pelicula,
        ]); */
        
    }
    public function actionAtras($id, $idimg, $title) {
        $nombre_pelicula = Peliculas::findOne($id);
        $dataProvider = new ActiveDataProvider([
             'query' => ActoresPeliculas::find()->where("actores_peliculas.cod_pelicula='$id'"),
     
        ]);
        
        $params = [
            "dataProvider" => $dataProvider,
            "id" => $id,
            "img" => $idimg,
            "title" => $title,
            "nombre_pelicula" => $nombre_pelicula,
        ];

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('reparto', $params);
        } else {
            return $this->render('reparto', $params);
        }

/*         return $this->render("reparto", [
                    "dataProvider" => $dataProvider,
                    "nombre_pelicula" => $nombre_pelicula,
                    "id" => $id,
                    "img" => $idimg,
                    "title" => $title,
                    "anchor" => "#box-peli-info", // Añadir el ancla aquí
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
     * Lists all ActoresPeliculas models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => ActoresPeliculas::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ActoresPeliculas model.
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
     * Creates a new ActoresPeliculas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new ActoresPeliculas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cod_act_peli]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing ActoresPeliculas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cod_act_peli]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ActoresPeliculas model.
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
     * Finds the ActoresPeliculas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ActoresPeliculas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ActoresPeliculas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
