<?php
/**
 * Agency Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-agency
 * @package   yii2-theme-agency
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

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
