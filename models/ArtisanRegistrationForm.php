<?php

namespace app\models;

use yii\base\Model;

class ArtisanRegistrationForm extends Model
{
    public $email;
    public $password;
    public $password2;
    public $firstname;
    public $lastname; 
    public $country;  
    public $region;
    public $city;

    /**
     * @return array the validation rules.
     */

    public function rules()
    {

        return [            
            [['email', 'password', 'password2', 'firstname', 'lastname', 'country', 'region', 'city'], 'required'],
        ];
    }
}