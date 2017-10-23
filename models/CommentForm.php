<?php
/**
 * Created by PhpStorm.
 * User: Yula
 * Date: 23.10.2017
 * Time: 11:23
 */

namespace app\models;


use yii\base\Model;

class CommentForm extends Model
{
    public $comment;
    public function rules()
    {
        return [
            [['comment'],"require"],
            [['comment'],'string','length'=>[3,250]]
        ];
    }
}