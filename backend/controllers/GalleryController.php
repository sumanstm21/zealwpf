<?php

namespace backend\controllers;

use Yii;
use common\models\Gallery;
use common\models\search\GallerySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GalleryController implements the CRUD actions for Gallery model.
 */
class GalleryController extends Controller
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
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index','create','update','view'],
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }

    /**
     * Lists all Gallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gallery model.
     * @param integer $id
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
     * Creates a new Gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreates()
    {
        $model = new Gallery();

        if ($model->load(Yii::$app->request->post())) {
            $image = $model->image;
            $image1 = $model->image1;
            $image2 = $model->image2;
            $image3 = $model->image3;
            $image4 = $model->image4;
            $image5 = $model->image5;
            $image6 = $model->image6;
            $image7 = $model->image7;
            $image8 = $model->image8;
            $image9 = $model->image9;
            
            $image = UploadedFile::getInstance($model, 'image');
            $image1 = UploadedFile::getInstance($model, 'image1');
            $image2 = UploadedFile::getInstance($model, 'image2');
            $image3 = UploadedFile::getInstance($model, 'image3');
            $image4 = UploadedFile::getInstance($model, 'image4');
            $image5 = UploadedFile::getInstance($model, 'image5');
            $image6 = UploadedFile::getInstance($model, 'image6');
            $image7 = UploadedFile::getInstance($model, 'image7');
            $image8 = UploadedFile::getInstance($model, 'image8');
            $image9 = UploadedFile::getInstance($model, 'image9');
            
            //            Yii::$app->request->BaseUrl;
            if ($image != ""){
                $model->image = $image->name;
                $image->saveAs(Yii::$app->basePath.'/web/images/' . $image,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image1 != ""){
                $model->image1 = $image1->name;
                $image1->saveAs(Yii::$app->basePath.'/web/images/' . $image1,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image2 != ""){
                $model->image2 = $image2->name;
                $image2->saveAs(Yii::$app->basePath.'/web/images/' . $image2,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image3 != ""){
                $model->image3 = $image3->name;
                $image3->saveAs(Yii::$app->basePath.'/web/images/' . $image3,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image4 != ""){
                $model->image4 = $image4->name;
                $image4->saveAs(Yii::$app->basePath.'/web/images/' . $image4,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image5 != ""){
                $model->image5 = $image5->name;
                $image5->saveAs(Yii::$app->basePath.'/web/images/' . $image5,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image6 != ""){
                $model->image6 = $image6->name;
                $image6->saveAs(Yii::$app->basePath.'/web/images/' . $image6,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image7 != ""){
                $model->image7 = $image7->name;
                $image7->saveAs(Yii::$app->basePath.'/web/images/' . $image7,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image8 != ""){
                $model->image8 = $image8->name;
                $image8->saveAs(Yii::$app->basePath.'/web/images/' . $image8,["width"=>"750", "height"=>"350"]);
            }
            
            if ($image9 != ""){
                $model->image9 = $image9->name;
                $image9->saveAs(Yii::$app->basePath.'/web/images/' . $image9,["width"=>"750", "height"=>"350"]);
            }
            
            if($model->save()){
                Yii::$app->session->setFlash('success','Data saved Sucessfully');
                return $this->redirect(['index']);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionCreate()
    {
        $uploadModel = new Gallery();
        
        if ($uploadModel->load(Yii::$app->request->Post())) {
            $image = \yii\web \UploadedFile::getInstances($uploadModel, 'image');
            foreach ($uploadModel->image as $file) {
                $image = new Gallery([
                    'image' => $file->name
                    //Other attributes ...
                ]);
                $uploadModel->save();
                $uploadModel->saveAs(Yii::$app->basePath.'/web/images/' . $file->baseName . '.' . $file->extension);
            }
            
//             if ($uploadModel->upload()) {
//                 echo 'successfully';
//                 return $this->redirect(['view', 'id' => $uploadModel->id]);
//                 if($uploadModel->save(false)){
//                     Yii::$app->session->setFlash('success','Data saved Sucessfully');
//                     return $this->redirect(['index']);
//                  }
//                 return $this->redirect(['view', 'id' => $uploadModel->id]);
//             }else{
                
//                 echo 'failed';
                
//             }
        }
        
        return $this->render('create', [
            'model' => $uploadModel,
        ]);
    }

    /**
     * Updates an existing Gallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Gallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallery::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
