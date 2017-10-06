<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'fixture' => [
            'class' => [
                'yii\console\controllers\FixtureController',
                'yii\faker\FixtureController'
            ],
            'providers' => [
                'app\tests\unit\faker\providers\Book',
            ],
            'namespace' => 'common\fixtures',
            'templatePath' => '@common/tests/templates/fixtures',
            'fixtureDataPath' => '@common/tests/fixtures/data',
          ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
