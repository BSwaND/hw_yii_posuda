<?php
  
  
  namespace frontend\models;
  
  use yii\db\ActiveRecord;
  use yii\db\ActiveQuery;
  
  class ProductDescriptor extends ActiveRecord
  {
    public function getProduct()
    {
      return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
  }