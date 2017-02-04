<?php

/**
 * Head layout.
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<title><?= Html::encode($this->title); ?></title>
<?= Html::csrfMetaTags(); ?>
<script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "@type": "Organization",
    "name": "<?= Yii::$app->name ?>",
    "url": "<?= Yii::$app->request->hostInfo ?>",
    "email": "<?= Yii::$app->params['supportEmail'] ?>"
}
</script>
<?php $this->head();

Yii::$app->get('themeManager')->registerAssets();

$this->registerMetaTag(
    [
        'charset' => Yii::$app->charset,
    ]
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1',
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]
);
