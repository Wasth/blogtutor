<?php
/**
 * Created by PhpStorm.
 * User: Yula
 * Date: 17.10.2017
 * Time: 9:12
 */

namespace app\models;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function rules()
    {
        return [
            [['image'],'required'],
            [['image'],'file','extensions'=>'jpg,png','checkExtensionByMimeType'=>false]
        ];
    }

    public function uploadFile(UploadedFile $file, $curImage) { // получает новую кратинку и текущую.

        $this->image = $file; // записываем новую картинку в переменную

        if($this->validate()) { // если картинка валидная(её присутствие и расширение jpg/png)
            if ($this->fileExists($curImage)) // если текущая картинка существует
                unlink($this->getFolder(). $curImage); // удаляем её
            return $this->saveImage(); // загружаем картинку на сервер и возвращаем название
        }
    }
    private function generateFilename() { // генерируем имя
        $filename = "";
        do {
            $filename = md5(uniqid($this->image->baseName)) . '.' . $this->image->extension;
        }while (file_exists(''));
        return $filename;
    }
    public function fileExists($curimg) { // проверка на существование файла
        if(!empty($curimg) && $curimg != null) {
            return file_exists($this->getFolder().$curimg);
        }
    }
    public function deleteCurrentImage($img){ // удаляем текущую картинку
        unlink($this->getFolder().$img);
    }
    public function getFolder() { // получаем директорию для загрузки
        return Yii::getAlias('@web').'uploads/';
    }
    public function saveImage(){
        $filename = $this->generateFilename(); // генерируем имя
        $this->image->saveAs($this->getFolder().$filename); // загружаем на сервер
        return $filename; // возварщаем название
    }
}