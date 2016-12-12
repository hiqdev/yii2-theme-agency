<?php

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
