<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\UserRegistrationForm; 
use app\models\ArtisanRegistrationForm;

class RegistrationController extends Controller

{
    
    public function actionIndex()
    {
        $usermodel = new UserRegistrationForm;
        $artmodel = new ArtisanRegistrationForm;
	
        $usform = Yii::$app->request->post('UserRegistrationForm');       
        $artform = Yii::$app->request->post('ArtisanRegistrationForm');  
        
        if ($usform)
        {
            $model->attributes = $usform;        

            if ($model->validate()){                   

                Users::adduser($model); 
                $model = new UserRegistrationForm;  

                return $this->render('index', ['usermodel' => $model, 'artmodel' => $artmodel]);
            } 
        } elseif ($artform){
            
            $model->attributes = $artform;        

            if ($model->validate()){                   

                Users::adduser($model); 
                $model = new ArtisanRegistrationForm;  

                return $this->render('index', ['usermodel' => $usermodel, 'artmodel' => $model]);
            } 
        } else {
            
            return $this->render('index', ['usermodel' => $usermodel, 'artmodel' => $artmodel]);
        }
    }	   

    public function actionUser()
    {

        $usform = Yii::$app->request->post('UserRegistrationForm');       
     
        if ($usform)
        {
            $model->attributes = $usform;        

            if ($model->validate()){                   

                Users::adduser($model); 
                $model = new UserRegistrationForm;  

                return $this->render('index', ['usermodel' => $model, 'artmodel' => $artmodel]);
            } 
        } 
    }
}
