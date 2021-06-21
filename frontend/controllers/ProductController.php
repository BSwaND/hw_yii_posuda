<?php
  
  namespace frontend\controllers;
  
  
  use yii\web\Controller;
  use frontend\models\Product;


  /**
   * Class ProductController
   * @package frontend\controllers
   */
  class ProductController  extends Controller
  {
    /**
     * @return string
     */
    public function actionIndex()
    {
    
//      $customers = Customer::find()
//        ->select('customer.*')
//        ->leftJoin('order', '`order`.`customer_id` = `customer`.`id`')
//        ->where(['order.status' => Order::STATUS_ACTIVE])
//        ->with('orders')
//        ->all();

//      Customer::find()
//        ->joinWith('orders')
//        ->where(['order.status' => Order::STATUS_ACTIVE])
//        ->all();

//      $orders = Order::find()->joinWith('customer')->orderBy('customer.id, order.id')->all();
      
      
      $product = Product::find()
        ->select('product.*,product_descriptor.*')
        ->joinWith('productDescriptor')
        //->groupBy('{{product}}.id')
        ->all();
      
      return $this->render('index', ['product'=>$product]);
    }
  }