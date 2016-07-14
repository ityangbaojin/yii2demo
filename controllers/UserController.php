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

    // 检查文件mime type
    public function actionTest() {
        if (extension_loaded('fileinfo')) {
            $encoding = false;
            $fiObj = new \finfo($encoding ? FILEINFO_MIME : FILEINFO_MIME_TYPE);
            $mimeType = $fiObj->file('./1.txt');
            // $mimeType = $fiObj->buffer(file_get_contents('./1.txt'));
            var_dump($mimeType); exit;
        }

        // 没fileinfon 扩展就用其它方式处理
        $command = 'file -I "' . realpath('1.txt') . '"';
        $shellOutput = trim(shell_exec($command));
        $colonPosition = strpos($shellOutput, ':');
        $shellGetMimeType = (substr($shellOutput, $colonPosition + 1));
        var_dump(explode(';', $shellGetMimeType)[0]);
    }
}