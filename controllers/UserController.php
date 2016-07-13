<?php

namespace app\controllers;

use app\models\Users;
use yii\web\Controller;

class UserController extends Controller {
    // 关闭默认头部和尾部
    public $layout = false;
    // 显示用户列表
    public function actionIndex() {
        $users = Users::find()->asArray()->all();
        return $this->render('index', compact('users'));
    }
}