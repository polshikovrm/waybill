<?php

namespace app\controllers;



use Yii;
use yii\web\Controller;

/**
 * Site controller.
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Renders the start page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionApi(){
        header('Content-type: application/json');
        $data = [    'key1'  => 'value',
                     'key2' => 'value2',
                     'key3' => 'value3'];
        echo json_encode($data);
    }

}
