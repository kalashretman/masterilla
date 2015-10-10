<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_item".
 *
 * @property string $category
 * @property string $name
 */
class CategoryItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'name'], 'required'],
            [['category', 'name'], 'string', 'max' => 8]
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
	
	public function getListName()
	{
		$sql = "SELECT name FROM category_item";
		$qvery = Yii::$app->db->createCommand($sql);
        $rows = $qvery->queryAll();
		foreach ($rows as $row)
            {
               $array[] = $row['name'];
            }

            return $array;
	}
	
	public function getListCategory()
	{
		$sql = "SELECT category FROM category_item";
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
		$sql = "SELECT * FROM category_item";
		$qvery = Yii::$app->db->createCommand($sql);
        return $qvery->queryAll();		
	}	
}
