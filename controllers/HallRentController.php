<?php

namespace app\controllers;

use Yii;
use app\models\HallRent;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HallRentController implements the CRUD actions for HallRent model.
 */
class HallRentController extends Controller
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
     * Lists all HallRent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new HallRent();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single HallRent model.
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
     * Creates a new HallRent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HallRent();
        $model->application_date = date('Y-m-d H:i:s');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			Yii::$app->session->setFlash('success', 'Спасибо! Ваша заявка принята к рассмотрению.');
			// TODO: можно реализовать через behavior
			Yii::$app->mailer->compose()
				->setTo($model->email)
				->setFrom(['test@yandex.ru' => 'test'])
				->setSubject('Уведомление о заявке')
				->setTextBody('Спасибо! Ваша заявка принята к рассмотрению.')
				->send();
			Yii::$app->mailer->compose()
				->setTo('admin@example.com')
				->setFrom(['test@yandex.ru' => 'test'])
				->setSubject('Уведомление о заявке')
				->setTextBody($model->application_date . ' Поступила новая заявка на заказ конференц-зала. ' .
					' ' . $model->customer_name . ' ' . $model->email . ' ' . $model->phone_number .
					' ' . $model->preferences)
				->send();
            return $this->redirect(['index', 'model' => $model]);
        }

		Yii::$app->session->setFlash('error', 'Произошла ошибка! Попробуйте еще раз.');
		return $this->render('index', [
			'model' => $model,
		]);
    }

    /**
     * Updates an existing HallRent model.
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
     * Deletes an existing HallRent model.
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
     * Finds the HallRent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HallRent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HallRent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
