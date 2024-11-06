<?php

namespace app\controllers;

use Yii;
use app\models\Directores;
use app\models\Peliculas;
use app\models\ActoresPeliculas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DirectoresController implements the CRUD actions for Directores model.
 */
class DirectoresController extends Controller {

    /**
     * {@inheritdoc}
     */
   public function actionDirector($id, $idimg, $title) {
        $nombre_pelicula = Peliculas::findOne($id);
        $dataProvider = new ActiveDataProvider([
            'query' => Peliculas::find()->where("peliculas.cod_pelicula='$id'"),
        ]);

        $params = [
            "dataProvider" => $dataProvider,
            "id" => $id,
            "img" => $idimg,
            "title" => $title,
            "nombre_pelicula" => $nombre_pelicula,
        ];

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('dire', $params);
        } else {
            return $this->render('dire', $params);
        }

/*         return $this->render("dire", [
                    "dataProvider" => $dataProvider,
                    "id" => $id,
                    "img" => $idimg,
                    "title" => $title,
                    "nombre_pelicula" => $nombre_pelicula,

        ]); */
    } 
     

//    public function actionAtras($id, $idimg, $title) {
//        $nombre_pelicula = Peliculas::findOne($id);
//        $dataProvider = new ActiveDataProvider([
//            'query' => ActoresPeliculas::find()->where("actores_peliculas.cod_pelicula='$id'"),
//        ]);
//
//
//        return $this->render("reparto", [
//                    "dataProvider" => $dataProvider,
//                    "nombre_pelicula" => $nombre_pelicula,
//                    "id" => $id,
//                    "img" => $idimg,
//                    "title" => $title,
//        ]);
//    }

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
     * Lists all Directores models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Directores::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Directores model.
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
     * Creates a new Directores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Directores();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dni_director]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Directores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dni_director]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Directores model.
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
     * Finds the Directores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Directores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Directores::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
