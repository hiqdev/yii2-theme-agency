<?php

use yii\helpers\Html;

$this->title = $name;
$this->params['contentId'] = 'error';
?>
<h1><?= Html::encode($this->title); ?></h1>
<p><?= nl2br(Html::encode($message)); ?></p>
<?= Html::a(Yii::t('hiqdev:themes:agency', 'GO BACK TO THE HOMEPAGE'), Yii::$app->request->hostInfo, ['class' => 'btn btn-success']) ?>
