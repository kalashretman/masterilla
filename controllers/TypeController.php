<?php

namespace app\controllers;

use yii\web\Controller;

class TypeController extends Controller
{
    public function actionTypeOfItem()
    {
        return $this->render('type-of-item');
    }
    
    public function actionTypeOfHandicraft()
    {
        return $this->render('type-of-handicraft');
    }    
}
