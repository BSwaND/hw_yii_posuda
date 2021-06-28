<?php
  
  
  namespace frontend\models;
  
  use yii\db\ActiveRecord;
  use yii\db\ActiveQuery;
  
  class ProductDescriptor extends ActiveRecord
  {
    static function tableName(): string
    {
       return '{{product_descriptor}}';
    }
  
    public function getProduct(): ActiveQuery
    {
      return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
  }