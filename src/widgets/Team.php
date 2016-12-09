<?php

namespace hiqdev\themes\agency\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Team extends Widget
{
    public $person;

    public $position;

    public $gravatar;

    public $social = [];

    public function run()
    {
        $out = '';
        $out .= Html::beginTag('div', ['class' => 'team-member']);
        $out .= Html::img($this->getImageSrc(), ['class' => 'img-responsive img-circle', 'style' => 'height: 200px; width: 200px']);
        $out .= Html::tag('h4', Html::encode($this->person));
        $out .= Html::tag('p', Html::encode($this->position));
        if (!empty($this->social)) {
            $out .= Html::beginTag('ul', ['class' => 'list-inline social-buttons']);
            foreach ($this->social as $icon => $link) {
                $out .= Html::beginTag('li');
                $out .= Html::a(Html::tag('i', null, ['class' => 'fa fa-fw ' . $icon]), $link);
                $out .= Html::endTag('li');
            }
            $out .= Html::endTag('ul');
        }
        $out .= Html::endTag('div');

        return $out;
    }

    protected function getImageSrc()
    {
        $out = $this->gravatar;
        if (filter_var($out, FILTER_VALIDATE_EMAIL)) {
            // todo: implement Gravatar widget
        }

        return $out;
    }
}
