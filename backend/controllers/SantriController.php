<?php

namespace backend\controllers;

use Yii;
use common\models\Santri;
use common\models\SantriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SantriController implements the CRUD actions for Santri model.
 */
class SantriController extends Controller
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
     * Lists all Santri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SantriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
	public function actionIndex_mod_sa()
    {
        $santri2 = Santri::find()->all();

        return $this->render('index_mod_sa', [
            'santri2' => $santri2,
        ]);
    }

    /**
     * Displays a single Santri model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
	
    public function actionView_mod($id)
    {

       $santri = Santri::find()
            ->where(['no_induk' => $id])
            ->all();


        return $this->render('view_mod', [
            'model' => $this->findModel($id),
            'santri' => $santri,
        ]);
    }

    /**
     * Creates a new Santri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Santri();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_induk]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionCreate_mod_sa()
    {
        $model = new Santri;

        if ($model->load(Yii::$app->request->post())) {
			
			$imageName = $model->nama;
			$model->file = UploadedFile::getInstance($model, 'file');
            if(isset($model->file)){
                //$model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension);
                //$model->foto = 'uploads/'.$imageName.'.'.$model->file->extension;
                $model->file->saveAs(Yii::getAlias('@common/uploads/').$imageName.'.'.$model->file->extension);
                $model->foto = 'uploads/'.$imageName.'.'.$model->file->extension;
            }else{
                $model->foto = 'belum ada';
            }
			
			$model->save();
			
            //return $this->redirect(['view', 'id' => $model->no_induk]);
            return $this->redirect('index.php?r=santri%2Findex_mod_sa');
            		
        } else {
            return $this->render('create_mod_sa', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Santri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no_induk]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
	
	
    public function actionUpdate_mod_sa($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			

			$imageName = $model->nama;
			$model->file = UploadedFile::getInstance($model, 'file');
			if(isset($model->file)){
                //$model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension);
                //$model->foto = 'uploads/'.$imageName.'.'.$model->file->extension;
    			$model->file->saveAs(Yii::getAlias('@common/uploads/').$imageName.'.'.$model->file->extension);
    			$model->foto = 'uploads/'.$imageName.'.'.$model->file->extension;
            }else{
                $model->foto = $model->foto;
            }

			$model->save();
  
			
			
            return $this->redirect('index.php?r=santri%2Findex_mod_sa');
			//return $this->redirect(['view', 'id' => $model->no_induk]);
        } else {
            return $this->render('update_mod_sa', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Santri model.
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
     * Finds the Santri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Santri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Santri::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
