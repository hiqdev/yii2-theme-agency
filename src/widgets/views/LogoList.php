<?php
/** @var array $logoArray */
/** @var string $imagePath */
use yii\helpers\Html;

?>
<style type="text/css">
    a.logo-list-link img {
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        filter: grayscale(100%);
    }
    a.logo-list-link:hover img {
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        -o-filter: grayscale(0%);
        -ms-filter: grayscale(0%);
        filter: grayscale(0%);
    }
</style>

<?php foreach ($logoArray as $image => $url) : ?>
    <div class="col-md-3 col-sm-6">
        <a href="<?= $url ?>" target="_blank" class="logo-list-link">
            <?= Html::img($imagePath . "/logos/{$image}", ['class' => 'img-responsive img-centered']) ?>
        </a>
    </div>
<?php endforeach; ?>
