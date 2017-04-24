<?php
namespace frontend\controllers;

use Yii;
use frontend\helpers\TextHelper;

class BaseController extends \yii\web\Controller {

    public function setPageTitle($title = null){

        if (!$title){
            return $this->view->title = TextHelper::pageTitle("Бесплатные объявления в {city}",['city' => Yii::$app->location->name_pp]);
        }

        if (is_object($title)){
            return $this->view->title = TextHelper::pageTitle("{$title->_text->name} в {city}",['city' => Yii::$app->location->name_pp]);
        }

        if(is_string($title)) {
            return $this->view->title = $title;
        }
        $this->view->title = 'rsdfrsdf';
    }

    public function beforeAction($action) {
        if (!parent::beforeAction($action)){
            return false;
        }

        $this->setPageTitle();
        return true;
    }
}