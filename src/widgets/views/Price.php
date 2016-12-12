<?php use yii\helpers\Html; ?>
<div class="pricing hover-effect <?= $activeClass ?>">
    <div class="pricing-head">
        <h3><?= $title ?><span><?= $subTitle ?></span></h3>
        <h4><?= $price ?> <span><?= $subPrice ?></span></h4>
    </div>
    <ul class="pricing-content list-unstyled">
        <?php foreach ($options as $item) : ?>
            <?= Html::beginTag('li') ?>
            <?= Html::tag('i', null, ['class' => 'fa fa-fw ' . $item['icon']]) ?> <?= $item['label'] ?>
            <?= Html::endTag('li') ?>
        <?php endforeach; ?>
    </ul>
    <div class="pricing-footer">
        <?= Html::tag('p', $footer) ?>
    </div>
</div>
