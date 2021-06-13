<?php
  
  namespace frontend\controllers;
  
  
  use yii\web\Controller;
  use frontend\models\ProductForm;
  
  class ProductController  extends Controller
  {
    public function actionIndex()
    {
       $product = new ProductForm();
      // dump($product->getProductAll());
      
      return $this->render('index', ['product'=>$product->getProductAll()]);
    }
  }