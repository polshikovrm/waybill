<?php


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error container">

    <h1 class="text-danger"><?= Html::encode($this->title) ?></h1>

    <div class="well">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

    <p>
        <?= Html::a('Home Page', Yii::$app->homeUrl) ?>
    </p>

</div>
