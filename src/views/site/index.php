<?php



/* @var $this yii\web\View */

$this->title .= getenv('APP_TITLE');
?>


<div class="site-index">

    <div class="jumbotron">
        <div class="container">
            <h1><?= getenv('APP_TITLE') ?></h1>
            <?php echo getenv('YII_ENV') ?>
        </div>
    </div>
    <div class="container">

    </div>

</div>
