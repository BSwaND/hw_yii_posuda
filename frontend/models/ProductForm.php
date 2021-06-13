<?php
  
  
  namespace frontend\models;
  
  
  use yii\base\Model;
  use yii\db\Query;

  class ProductForm  extends Model
  {
    public $query;
    
    public function __construct($config = [])
    {
      parent::__construct($config);
  
      $this->query = new Query();
    }
  
    /**
     * @return array
     */
    public function getProductAll()  :array
    {
      return $this->query->from('product')->all();
    }
  
    /**
     * @param int $id
     * @return string
     */
    public function getProduct(int $id) :string
    {
    
    }
  }