<?php

namespace backend\controllers;

use Yii;
use common\models\Syahriyah;
use common\models\SyahriyahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use common\models\Santri;

/**
 * SyahriyahController implements the CRUD actions for Syahriyah model.
 */
class SyahriyahController extends Controller
{
    /**
     * @inheritdoc
     */
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
     * Lists all Syahriyah models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SyahriyahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
//------------------------------------------------
    public function actionIndex_mod_sy()
    {
        $searchModel = new SyahriyahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
//------------------------------------------------
	
    /**
     * Displays a single Syahriyah model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Syahriyah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Syahriyah();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_syahriyah]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionCreate_mod_sy()
    {
        $model = new Syahriyah();
//        $santri = new Santri($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

//            $santri = Santri::findOne($id);
//            $santri->posisi = $model->banyak;
//            $santri->save();
            return $this->redirect(['view', 'id' => $model->no_syahriyah]);
        } else {
            return $this->render('create_mod_sy', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Syahriyah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_syahriyah]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Syahriyah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Syahriyah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Syahriyah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Syahriyah::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
