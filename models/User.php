<?php

namespace app\models;

use Yii;

class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['email'], 'string', 'max' => 48],
            [['password'], 'string', 'max' => 64],
            [['role'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * Finds user by email
     *
     * @param  string  $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['email'], $email) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    
    public function getRole()
    {
        return $this->role;
    }
    
    public function addUser($model)
    {
        $request2 = Yii::$app->db->createCommand();
        $request2->insert('user',[
            'email'=> $model->email, 
            'password' => md5($model->password),
            'role' => $model->role]);
        $request2->execute(); 
        
    }
       
    public function validatePassword($password) 
    {
        return $this->password === md5($password);
    }
    
    public function checkEmail($email)
    {
        $sql = 'SELECT COUNT(*) as count FROM user WHERE email=:email';
        $query = Yii::$app->db->createCommand($sql);
        $query->bindParam(':email', $email);
        return $query->queryOne(); 
    } 
       
}