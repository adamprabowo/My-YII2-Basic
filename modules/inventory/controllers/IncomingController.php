<?php


namespace app\modules\inventory\controllers;

use app\modules\inventory\models\FormIncoming;
use app\modules\inventory\models\search\SearchIncoming;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use  yii\helpers\Url;
use yii\web\NotFoundHttpException;

class IncomingController extends Controller {
       
    public function actionIndex()
    {
        $searchModel = new SearchIncoming();
        $request = Yii::$app->request->queryParams;
        if (Yii::$app->request->isAjax) {
            return $searchModel->searchDataTable($request);
        }
        return $this->render('index');
    }

    public function actionAdd()
    {
        $model= new FormIncoming();
        $post = Yii::$app->request->post();
        
        if ($model->load($post)) {
            $model->save(false);
            return $this->redirect(Url::toRoute(['/inventory/incoming/view', 'id'=> $model->id]));
        }
        $model->incoming_no=$model->inNumber();
        $model->date=date('d-m-Y');
        return $this->render('create',['model'=>$model]);
    }


    public function  actionEdit($id)
    {
        $model= $this->findModel($id);
        $post = Yii::$app->request->post();
        
        if ($model->load($post)) {
            $model->save(false);
            return $this->redirect(Url::toRoute(['/inventory/incoming/view', 'id'=> $model->id]));
        }
        $model->incoming_no=$model->inNumber();
        $model->date=date('d-m-Y');
        return $this->render('edit',['model'=>$model]);
    }

    public function actionDel($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['/inventory/incoming']);
    }

    public function actionView($id)
    {
       $model=$this->findModel($id);
       return $this->render('view',['model'=>$model]);
    }
    protected function findModel($id)
    {
        if (($model = FormIncoming::findOne(['id' => $id])) !== null) {
            return $model;
        }
        else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}