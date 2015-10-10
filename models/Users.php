<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $lastname
 * @property integer $phone
 * @property string $country
 * @property string $region
 * @property integer $zip
 * @property string $location
 * @property string $address
 */
class Users extends \yii\base\Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'name', 'lastname', 'phone', 'country', 'region', 'zip', 'location', 'address'], 'required'],
            [['name', 'lastname', 'country'], 'string'],
            [['phone', 'zip'], 'integer'],
            [['email', 'password'], 'string', 'max' => 32],
            [['region'], 'string', 'max' => 20],
            [['location', 'address'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'country' => 'Country',
            'region' => 'Region',
            'zip' => 'Zip',
            'location' => 'Location',
            'address' => 'Address',
        ];
    }
	
    public function addUserFull(\yii\base\Model $model)
    {
        $request = Yii::$app->db->createCommand($sql);
        $request->insert('users',[
            'email'=> $model->email, 
            'password' => $model->password,
            'name'=> $model->name, 
            'lastname' => $model->lastname,
            'phone'=> $model->phone, 
            'country' => $model->country,
            'region'=> $model->region, 
            'zip' => $model->zip,
            'location'=> $model->location, 
            'address' => $model->address,
            ]);
        return $request->execute();      
    }
    
    public function addUser(\yii\base\Model $model)
    {
        $request1 = Yii::$app->db->createCommand();
        $request1->insert('users',[
            'email'=> $model->email, 
            'password' => md5($model->password),
            'name' => "", 
            'lastname' => "",
            'phone' => "0", 
            'country' => "",
            'region'=> "", 
            'zip' => "0",
            'location'=> "", 
            'address' => ""
            ]);
        $request1->execute();           
        $request2 = Yii::$app->db->createCommand();
        $request2->insert('user',[
            'email'=> $model->email, 
            'password' => md5($model->password),
            'role' => 'BUYER']);
        $request2->execute();    
    }
    
    public function validatePassword($password) 
    {
        return $this->password === md5($password);
    }
}