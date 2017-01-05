<?php

namespace hiqdev\themes\agency\widgets;

use Yii;
use yii\base\Widget;

class LogoList extends Widget
{
    public $imagePath;

    public function run()
    {
        return $this->render('LogoList', [
            'logoArray' => Yii::$app->params['logoArray'],
            'imagePath' => $this->imagePath,
        ]);
    }
}
