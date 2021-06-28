<?php
  
  
  namespace frontend\models;
  
  
  use yii\db\ActiveRecord;
  use yii\db\ActiveQuery;

  /**
   * Class Product
   * @package frontend\models
   */
  class Product  extends ActiveRecord
  {
    /**
     * @return string
     */
    public static function tableName()
    {
      return '{{product}}';
    }
    /**
     * @return ActiveQuery
     */
    public function getProductDescriptor(): ActiveQuery
    {
      return $this->hasMany(ProductDescriptor::className(), ['product_id' => 'id']);
    }
  
    /**
     * @param int $id
     * @return array|ActiveRecord[]
     */
    static function getProduct(int $id)
    {
      $product = Product::find()
        ->joinWith('productDescriptor')
        ->where(['and',[
          'product_descriptor.product_id' => $id,
          'product_descriptor.language' => 1]
        ])
        ->one();
    
    return $product;
    }
  }