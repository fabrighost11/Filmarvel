<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use app\models\PremiosPelicula;
use app\models\Peliculas;
use app\models\Premios;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PremiosPeliculaController implements the CRUD actions for PremiosPelicula model.
 */
class PremiosPeliculaController extends Controller {

    /**
     * {@inheritdoc}
     */
/*     public function actionMaspremiada($id, $idimg, $title) {
        $maxpremiada = Yii::$app->db->createCommand("SELECT tabla.cod_pelicula FROM (
                SELECT cod_pelicula, COUNT(*) num_premios FROM premios_pelicula
                GROUP BY cod_pelicula
                ) tabla WHERE tabla.num_premios = (
                SELECT MAX(premiada.num_premios) FROM (
                SELECT cod_pelicula, COUNT(*) num_premios FROM premios_pelicula
                GROUP BY cod_pelicula
                ) premiada
                )")->queryAll();
    
        $codigo_pelicula = !empty($maxpremiada) ? $maxpremiada[0]['cod_pelicula'] : null;
        $dataProvider = new ActiveDataProvider([
            'query' => Peliculas::find()->where(['cod_pelicula' => $codigo_pelicula]),
        ]);
    
        return $this->render('premio', [
            'dataProvider' => $dataProvider,
            'id' => $id,
            'img2' => Html::img('@web/img/black.jpg', ['class' => 'img-responsive img-border']),
            'img' => $idimg,
            'title' => $title,
            'nombre_pelicula' => Peliculas::findOne($codigo_pelicula),
        ]);
    } */
    

    public function actionPrem($id, $idimg ,$title) {
        $maxpremiada = Yii::$app->db->createCommand("SELECT tabla.cod_pelicula FROM (
            SELECT cod_pelicula, COUNT(*) num_premios FROM premios_pelicula
            GROUP BY cod_pelicula
            ) tabla WHERE tabla.num_premios = (
            SELECT MAX(premiada.num_premios) FROM (
            SELECT cod_pelicula, COUNT(*) num_premios FROM premios_pelicula
            GROUP BY cod_pelicula
            ) premiada
            )")->queryAll();

    $codigo_pelicula = !empty($maxpremiada) ? $maxpremiada[0]['cod_pelicula'] : null;
    $codigo_premio = Yii::$app->db->createCommand("Select cod_premio from premios_pelicula where cod_pelicula = '$codigo_pelicula'")->queryAll(); 
    $dataProvider = new ActiveDataProvider([
        'query' => Premios::find()->where(['cod_premio' => $codigo_premio]),
    ]);
    $img_mas_premiada = '@web/img/black.jpg';

    $params = [
        "dataProvider" => $dataProvider,
        "id" => $id,
        "title" => $title,
        'img' => $idimg,
        "img2" => Html::img($img_mas_premiada, ['class' => 'img-responsive img-border']),
        "nombre_pelicula" => Peliculas::findOne($codigo_pelicula),
    ];

    if (Yii::$app->request->isAjax) {
        return $this->renderPartial('premio2', $params);
    } else {
        return $this->render('premio2', $params);
    }

/*         return $this->render("premio2", [
                    "dataProvider" => $dataProvider,
                    "id" => $id,
                    "title" => $title,
                    'img' => $idimg,
                    "img2" => Html::img($img_mas_premiada, ['class' => 'img-responsive img-border']),
                    "nombre_pelicula" => Peliculas::findOne($codigo_pelicula),
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
     * Lists all PremiosPelicula models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => PremiosPelicula::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PremiosPelicula model.
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
     * Creates a new PremiosPelicula model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new PremiosPelicula();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_premio]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing PremiosPelicula model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_premio]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PremiosPelicula model.
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
     * Finds the PremiosPelicula model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PremiosPelicula the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = PremiosPelicula::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
