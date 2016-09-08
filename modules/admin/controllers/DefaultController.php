<?php

namespace app\modules\admin\controllers;


use app\models\User;
use app\modules\admin\components\LoginForm;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string|void
     */
    public function actionLogin()
    {


        $this->layout='login';

        if(!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if($model->load(\Yii::$app->request->post()) && $model->login()) {

            return $this->redirect('index');

        }
        return $this->render('login', [
            'model' => $model,
        ]);

    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
