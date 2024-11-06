<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use app\models\Personajes;
use app\models\Actores;
use app\models\Peliculas;
use app\models\ActoresPeliculas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonajesController implements the CRUD actions for Personajes model.
 */
class PersonajesController extends Controller {

    /**
     * {@inheritdoc}
     */
        public function actionPerson($id, $idimg, $title){
        $nombre_pelicula = Peliculas::findOne($id);
        $dataProvider = new ActiveDataProvider([
            'query' => Personajes::find()->join('inner join', 'actores_peliculas', 'personajes.dni_actor = actores_peliculas.dni_actor')
            ->where("actores_peliculas.cod_pelicula='$id'"),
     
        ]);

        $params = [
            "dataProvider" => $dataProvider,
            "id" => $id,
            "img" => $idimg,
            "title" => $title,
            "nombre_pelicula" => $nombre_pelicula,
        ];

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('personajes1', $params);
        } else {
            return $this->render('personajes1', $params);
        }

/*           return $this->render("personajes1",[
           "dataProvider" => $dataProvider,
            "id" => $id,
            "img" => $idimg,
            "title" => $title,
            "nombre_pelicula" => $nombre_pelicula,
        ]);
         */
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
     * Lists all Personajes models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Personajes::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Personajes model.
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
     * Creates a new Personajes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Personajes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_personaje]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Personajes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_personaje]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Personajes model.
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
     * Finds the Personajes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Personajes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Personajes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
