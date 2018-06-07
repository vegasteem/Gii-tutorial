<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appliances".
 *
 * @property integer $id
 * @property string $name
 * @property integer $quantity
 * @property string $category
 */
class Appliances extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appliances';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'quantity', 'category'], 'required'],
            [['quantity'], 'integer'],
            [['name', 'category'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'quantity' => 'Quantity',
            'category' => 'Category',
        ];
    }
}
