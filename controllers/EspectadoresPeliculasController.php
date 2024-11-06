<?php

namespace app\controllers;

use Yii;
use app\models\EspectadoresPeliculas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EspectadoresPeliculasController implements the CRUD actions for EspectadoresPeliculas model.
 */
class EspectadoresPeliculasController extends Controller
{
    /**
     * {@inheritdoc}
     */
    
     public function actionValorpeli($id, $value){
         $numero = Yii::$app->db
                ->createCommand("INSERT INTO `espectadores_peliculas` (`id_espe_peli`, `cod_pelicula`, `id_usuario`, `calificacion_peli`, `valoracion_actor`) VALUES ('', '', '', $value, NULL)")
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql'=>"INSERT INTO `espectadores_peliculas` (`id_espe_peli`, `cod_pelicula`, `id_usuario`, `calificacion_peli`, `valoracion_actor`) VALUES ('', '', '', $value, NULL)",
           // 'totalCount'=>$numero,
            'pagination'=>[
                'pageSize' => 5,
            ]
        ]);
        return $this->render("site/peli1");
    }
    public function behaviors()
    {
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
     * Lists all EspectadoresPeliculas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EspectadoresPeliculas::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EspectadoresPeliculas model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EspectadoresPeliculas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EspectadoresPeliculas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_espe_peli]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EspectadoresPeliculas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_espe_peli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EspectadoresPeliculas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EspectadoresPeliculas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EspectadoresPeliculas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EspectadoresPeliculas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
