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
    public $title;
    
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
      /*return  Product::find()
        ->where(['id' => $id])
        ->with('productDescriptor')
        ->one();
      */
      /*
      return  Product::find()
        ->where(['product.id' => $id])
        ->joinWith(['productDescriptor'])
        ->one();
        */
      return  Product::find()
        ->select(['product.*','product_descriptor.*'])
        ->where(['product.id' => $id])
        ->leftJoin( 'product_descriptor', 'product.id = product_descriptor.product_id ')
       // ->with('productDescriptor')
        ->andWhere(['product_descriptor.language' =>2 ])
        ->one();

    }
  }