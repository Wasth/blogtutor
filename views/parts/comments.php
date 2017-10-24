<?php use yii\widgets\ActiveForm;

if(!empty($comments)): ?>
    <div id="comments">
        <h2><?=sizeof($comments) ?> Comments</h2>
        <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <?php if(isset($comment->user->image)): ?>
                    <div class="comment-avatar" style="background-image: url(<?= $comment->user->image ?>);"></div>
                <?php endif; ?>
                <div class="comment-content">
                    <h3><?=$comment->user->name ?></h3>
                    <p class="comment-date"><?=$comment->getDate() ?></p>
                    <p class="comment-text"><?=$comment->text ?></p>
                </div>
                <div class="clear"></div>
            </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>
    <!--<div class="clear"></div>-->

<?php
$form = ActiveForm::begin([
    'action'=>['comment','id'=>$article->id],
//                    'options'=>['id'=>'commentForm'],
]);
?>
<?php if(!Yii::$app->user->isGuest): ?>
    <div id="commentForm">
        <h2>Leave a comment</h2>
        <?php if(Yii::$app->session->getFlash('comment')): ?>
            <h3><?=Yii::$app->session->getFlash('comment'); ?></h3>
        <?php endif; ?>
        <?= $form->field($commentForm,'comment')->textarea(['rows'=>10,'placeholder'=>'Enter comment...'])->label(false); ?>
        <!--            <textarea rows="10" placeholder="Enter comment..."></textarea>-->
        <button type="submit">SEND</button>
    </div>
<?php endif; ?>
<?php
ActiveForm::end();
?>