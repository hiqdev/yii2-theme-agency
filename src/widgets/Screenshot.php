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
use yii\helpers\Html;

class Screenshot extends Widget
{
    public $header;

    public $subHeader;

    public $description;

    public $previewImage;

    public $fullImage;

    private $_modalId;

    public function run()
    {
        $this->_modalId = mt_rand();
        $modal = $this->getModal();
        $this->getView()->registerJs("$('{$modal}').appendTo('body')");

        return $this->getPreview();
    }

    protected function getPreview()
    {
        $out = '';
        $out .= Html::beginTag('a', ['href' => '#' . $this->_modalId, 'class' => 'portfolio-link', 'data-toggle' => 'modal']);
        $out .= '<div class="portfolio-hover"><div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div></div>';
        $out .= Html::img($this->previewImage, ['class' => 'img-responsive']);
        $out .= Html::endTag('a');
        $out .= Html::beginTag('div', ['class' => 'portfoliy-caption']);
        $out .= Html::tag('h4', $this->header);
        $out .= Html::tag('p', $this->subHeader, ['class' => 'text-muted']);
        $out .= Html::endTag('div');

        return $out;
    }

    protected function getModal()
    {
        $out = '';
        $out .= Html::beginTag('div', ['class' => 'portfolio-modal modal fade', 'id' => $this->_modalId, 'role' => 'dialog']);
        $out .= Html::beginTag('div', ['class' => 'modal-content']);
        $out .= '<div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>';
        $out .= '<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2"><div class="modal-body">';
        $out .= Html::tag('h2', $this->header);
        $out .= Html::tag('p', $this->subHeader, ['class' => 'item-intro text-muted']);
        $out .= Html::img($this->fullImage, ['class' => 'img-responsive']);
        $out .= Html::tag('p', $this->description);
        $out .= Html::button('<i class="fa fa-fw fa-close"></i> ' . Yii::t('hipanel:com', 'Close'), ['class' => 'btn btn-primary', 'data-dismiss' => 'modal']);
        $out .= '</div></div></div></div>';
        $out .= Html::endTag('div');
        $out .= Html::endTag('div');

        return $out;
    }
}
