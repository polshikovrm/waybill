<?php



// Define application aliases
Yii::setAlias('@app', dirname(__DIR__).'/..');
Yii::setAlias('@root', '@app/..');
Yii::setAlias('@runtime', dirname(__DIR__).'/../../runtime');
Yii::setAlias('@web', dirname(__DIR__).'/../web');
Yii::setAlias('@webroot', dirname(__DIR__).'/web');

// Load $merge configuration files
$applicationType = php_sapi_name() == 'cli' ? 'console' : 'web';
$env = YII_ENV;
$configDir = __DIR__;

return \yii\helpers\ArrayHelper::merge(
    require("{$configDir}/common.php"),
    require("{$configDir}/{$applicationType}.php"),
    (file_exists("{$configDir}/common-{$env}.php")) ? require("{$configDir}/common-{$env}.php") : [],
    (file_exists("{$configDir}/{$applicationType}-{$env}.php")) ? require("{$configDir}/{$applicationType}-{$env}.php") : [],
    (file_exists(getenv('APP_CONFIG_FILE'))) ? require(getenv('APP_CONFIG_FILE')) : []
);
