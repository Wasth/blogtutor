<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Author</td>
                <td>Article</td>
                <td>Text</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        <?php if($comments): ?>
            <?php foreach($comments as $comment): ?>
                <tr>
                    <td><?=$comment->id ?></td>
                    <td><?=$comment->user->name ?></td>
                    <td><a href="<?=Url::toRoute(['/post','id'=>$comment->article->id]) ?>"><?=$comment->article->title ?></a></td>
                    <td><?=$comment->text ?></td>
                    <td>
                        <?php if($comment->isAllowed()): ?>
                            <a class="btn btn-warning" href="<?=Url::toRoute(['comment/allowtoggle','id'=>$comment->id]) ?>">Not Allow</a>
                        <?php else:?>
                            <a class="btn btn-success" href="<?=Url::toRoute(['comment/allowtoggle','id'=>$comment->id]) ?>">Allow</a>
                        <?php endif; ?>


                        <a class="btn btn-danger" href="<?=Url::toRoute(['comment/delete','id'=>$comment->id]) ?>">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

</div>
