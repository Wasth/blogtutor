<?php
/**
 * Created by PhpStorm.
 * User: Yula
 * Date: 24.10.2017
 * Time: 8:52
 */

namespace app\modules\admin\controllers;


use app\models\Comment;
use yii\web\Controller;

class CommentController extends Controller
{
    public function actionIndex(){
        $comments = Comment::find()->orderBy('id desc')->all();

        return $this->render('index',[
            'comments'=>$comments,
        ]);
    }
    public function actionDelete($id){
        $comment = Comment::findOne($id);

        if($comment->delete()) {
            return $this->redirect('index');
        }
    }
    public function actionAllowtoggle($id) {
        $comment = Comment::findOne($id);
        if($comment->toggleAllow()) {
            return $this->redirect('index');
        }
    }
}