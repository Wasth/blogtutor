<?php
/**
 * Created by PhpStorm.
 * User: Yula
 * Date: 20.10.2017
 * Time: 13:45
 */

namespace app\controllers;


use app\models\LoginForm;
use app\models\User;
use app\models\SignupForm;
use Yii;
use yii\web\Controller;

class AuthController extends Controller
{
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
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
    public function actionTest(){
//        $user = User::findOne(1);

        // Yii::$app->user->logout();

    }
    public function actionSignup(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new SignupForm();
        if(Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            if($model->signup()) {
                return $this->redirect(['auth/login']);
            }
        }

        return $this->render('signup',[
            'model' => $model,
        ]);
    }

}