<?php

namespace hiqdev\themes\agency\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

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
