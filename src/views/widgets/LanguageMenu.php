<?php

/** @var array $languages */
/** @var string $language */
/** @var array|mixed $selectUrl */
use yii\helpers\Html;
use yii\helpers\Url;

$delimiter = '&nbsp;·&nbsp;';
$out = '';
?>
<?php if (count($items) > 1) : ?>
    <ul class="list-inline">
        <?php
        foreach ($items as $code => $data) {
            if ($data['active']) {
                $out .= Html::tag('li', $data['label']);
            } else {
                $out .= Html::tag('li', Html::a($data['label'], $data['url']));
            }
            $out .= $delimiter;
        }
        echo rtrim($out, $delimiter);
        ?>
    </ul>
<?php endif ?>
