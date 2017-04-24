<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\HttpException;
use common\models\Ads;

/**
 * Объявления
 */


class AdsController extends BaseController
{
    /**
     * Текущая категория
     */
    protected $category = null;

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }


    public function actionCreate(){

        $ads = new Ads;

        $this->pageTitle = 'Добавить объявление';

        return $this->render('create',  [
            'ads'      => $ads,
        ]);
    }
}