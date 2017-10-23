<?php

namespace app\models;
use yii\base\Model;
use app\models\User;
class SignupForm extends Model {
	public $name;
	public $email;
	public $password;

	public function rules() {
		return [
			[['name','email','password'],'required'],
			[['name'],'string'],
            [['name'],'unique','targetClass'=>'app\models\User','targetAttribute'=>'name'],
			[['email'],'email'],
			[['email'],'unique','targetClass'=>'app\models\User','targetAttribute'=>'email']
		];
	}
	public function signup() {
		if($this->validate()) {
			$user = new User();
			$user->attributes = $this->attributes;
			return $user->create();
		}
	}
}