<?php
  
  
  namespace frontend\models;
  
  
  use yii\db\ActiveRecord;
  use frontend\models\ProductDescriptor;
  use yii\db\ActiveQuery;

  class Product  extends ActiveRecord
  {
    public function getProductDescriptor()
    {
      return $this->hasMany(ProductDescriptor::className(), ['product_id' => 'id']);
    }
  }