<?php
  
  namespace frontend\controllers;
  
  
  use Yii;
  use yii\web\Controller;
  use frontend\models\Product;


  /**
   * Class ProductController
   * @package frontend\controllers
   */
  class ProductController  extends Controller
  {
    
    private $language;
  
    /**
     * ProductController constructor.
     * @param $id
     * @param $module
     * @param array $config
     */
    public function __construct($id, $module, $config = [])
    {
      parent::__construct($id, $module, $config);
       $this->language =  Yii::$app->params['language'];
    }
  
    /**
     * @param int $id
     * @return string
     */
    public function actionIndex(int $id): string
    {

     // $product = Product::findOne($id)->productDescriptor;
      //$product = Product::findOne($id);
      $product = Product::getProduct($id);
      
      return $this->render('index', ['product'=>$product]);
      //return $this->render('index', ['product'=>$product->productDescriptor]);
    }
  }