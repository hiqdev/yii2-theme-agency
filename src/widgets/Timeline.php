<?php
/**
 * Agency Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-agency
 * @package   yii2-theme-agency
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\agency\widgets;

use yii\base\Widget;

class Timeline extends Widget
{
    public $title;

    public $subTitle;

    public $description;

    public $image;

    public function run()
    {
        return $this->render('Timeline', [
            'title' => $this->title,
            'subTitle' => $this->subTitle,
            'description' => $this->description,
            'image' => $this->image,
        ]);
    }
}
