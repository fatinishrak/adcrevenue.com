<?php

namespace app\controllers;

use Yii;
use app\models\NotificationSearch;
use yii\web\Controller;

/**
 * Application notification controller
 */
class NotificationController extends Controller
{
    public $layout = 'dashboard';
    /**
     * Lists all Notification models.
     * @return mixed
     */
    public function actionIndex()
    {        		
		$this->layout = 'dashboard';
        $searchModel = new NotificationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
	public function actionView($id)
    {
		$this->layout = 'dashboard';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
	
	protected function findModel($id)
    {
        if (($model = Monitoringchok::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
