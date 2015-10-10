<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_handicraft".
 *
 * @property string $category
 * @property string $name
 */
class CategoryHandicraft extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_handicraft';
    }
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'name'], 'required'],
            [['category', 'name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category' => 'Category',
            'name' => 'Name',
        ];
    }
	
	public static function getListName()
	{
		$sql = "SELECT name FROM category_handicraft";
		$qvery = Yii::$app->db->createCommand($sql);
        $rows = $qvery->queryAll();
		foreach ($rows as $row)
            {
               $array[] = $row['name'];
            }

            return $array;
	}
	
	public static function getListCategory()
	{
		$sql = "SELECT category FROM category_handicraft";
		$qvery = Yii::$app->db->createCommand($sql);
        $rows = $qvery->queryAll();
		foreach ($rows as $row)
            {
               $array[] = $row['category'];
            }

            return $array;		
	}	
	
	public static function getList()
	{
		$sql = "SELECT * FROM category_handicraft";
		$qvery = Yii::$app->db->createCommand($sql);
        return $qvery->queryAll();		
	}	
}
