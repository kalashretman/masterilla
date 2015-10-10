<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artisan".
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $role
 */
class Artisan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artisan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
     //       [['email', 'password', 'firstname', 'lastname', 'country', 'region', 'city']]
    //        [['email'], 'string', 'max' => 48],
    //        [['password'], 'string', 'max' => 64],
    //        [['firstname', 'lastname', 'country', 'region', 'city'], 'string', 'max' => 32]
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
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'country' => 'Country',
            'region' => 'Region',
            'city' => 'City',
            'role' => 'Role',
        ];
    }
    
    public function addArtisanFull(\yii\base\Model $model)
    {
        $request = Yii::$app->db->createCommand($sql);
        $request->insert('artisan',[
            'email'=> $model->email, 
            'password' => $model->password,
            'firstname'=> $model->name, 
            'lastname' => $model->lastname,
            'country' => $model->country,
            'region'=> $model->region, 
            'city' => $model->city,
            ]);
        return $request->execute();      
    }
    
    public function addArtisan(\yii\base\Model $model)
    {
        echo 'pered model';
        $request1 = Yii::$app->db->createCommand();
        $request1->insert('artisan',[
            'email'=> $model->email, 
            'password' => md5($model->password),
            'firstname'=> $model->firstname, 
            'lastname' => $model->lastname,
            'country' => $model->country,
            'region'=> $model->region,  
            'city' => $model->city,
            ]);
        $request1->execute();   
        
        $request2 = Yii::$app->db->createCommand();
        $request2->insert('user',[
            'email'=> $model->email, 
            'password' => md5($model->password),
            'role' => 'ARTISAN'
            ]);
        $request2->execute();  
    }

    public function validatePassword($password) 
    {
        return $this->password === md5($password);
    }    
}
