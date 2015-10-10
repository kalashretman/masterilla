<?php

namespace app\models;

use yii\base\Model;

class RegistrationForm  extends Model
{
    public $email;
    public $password;
    public $password2;
    public $role;

    /**
     * @return array the validation rules.
     */

    public function rules()
    {
        return [
            // email and password are both required
            [['email', 'password', 'password2', 'role'], 'required'],
        ];
    }
}
