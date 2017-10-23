<?php

namespace app\modules\admin\controllers;

use app\models\Category;
use app\models\Tag;
use app\models\ImageUpload;
use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
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
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSetCategory($id) {
        $article = $this->findModel($id);

        if(Yii::$app->request->isPost) {
            $category_id = Yii::$app->request->post('category');
            if ($article->saveCategory($category_id)) {

                return $this->redirect(['view','id'=>$article->id]);
            }

//            $article->category_id = $category_id;
//            $article->save(false);

        }

        $categories = ArrayHelper::map(Category::find()->all(), 'id','title');
        $selectedCategory = $article->category_id;
        return $this->render('category',[
            "article" => $article,
            'selectedCategory'=> $selectedCategory,
            'categories' => $categories
        ]);
    }

    public function actionSetImage($id) {

        $model = new ImageUpload; // создаем модель для загрузки картинки

        if (Yii::$app->request->isPost) {

            $article = $this->findModel($id); // выдергиваем статью по id в моедль Article

            $file = UploadedFile::getInstance($model,'image'); // получаем картинку из модели

            if($article->saveImage($model->uploadFile($file, $article->image))) { // если картинка загружена

                return $this->redirect(['view','id'=>$article->id]); // редиректим на страницу со статьями
            }

        }

        return $this->render('image',['model' => $model]);
    }
    public function actionSetTags($id){
        $article = $this->findModel($id);

        if(Yii::$app->request->isPost) {
            $tags = Yii::$app->request->post('tags');
            $article->saveTags($tags);
            return $this->redirect(['view','id'=>$article->id]);
        }

        $selectedTags = $article->getSelectedTags();
        $tags = ArrayHelper::map(Tag::find()->all(), 'id','title');
        return $this->render('tags',[
            'article' => $article,
            'selectedTags' => $selectedTags,
            'tags' => $tags
        ]);
    }
    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
