<?php
/** @var array $logoArray */
/** @var string $imagePath */
use yii\helpers\Html;

?>
<?php foreach ($logoArray as $image => $url) : ?>
    <div class="col-md-3 col-sm-6">
        <a href="<?= $url ?>" target="_blank">
            <?= Html::img($imagePath . "/logos/{$image}", ['class' => 'img-responsive img-centered']) ?>
        </a>
    </div>
<?php endforeach; ?>
