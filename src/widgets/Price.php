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

class Price extends Widget
{
    public $title;

    public $subTitle;

    public $price;

    public $subPrice;

    public $options = [];

    public $footer;

    public $activeClass = '';

    public function run()
    {
        return $this->render('Price', [
            'title' => $this->title,
            'subTitle' => $this->subTitle,
            'price' => $this->price,
            'subPrice' => $this->subPrice,
            'options' => $this->options,
            'footer' => $this->footer,
            'activeClass' => $this->activeClass,
        ]);
    }
}
