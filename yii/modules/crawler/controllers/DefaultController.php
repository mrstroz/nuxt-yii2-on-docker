<?php

namespace app\modules\crawler\controllers;

use yii\rest\Controller;
use yii\web\Response;

class DefaultController extends Controller
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [

            // For cross-domain AJAX request
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    // restrict access to domains:
                    'Origin' => ['localhost:3000'],
                    'Access-Control-Request-Method' => ['GET', 'POST'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age' => 3600,                 // Cache (seconds)
                ],
            ],

        ]);
    }

    public function actionIndex()
    {
        return [
            'RESPONSE FROM YII2'
        ];
    }
}