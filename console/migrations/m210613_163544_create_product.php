<?php

use yii\db\Migration;

/**
 * Class m210613_163544_create_product
 */
class m210613_163544_create_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product',[
          'id' => $this->primaryKey(),
          'price' => $this->integer()->notNull(),
          'image' => $this->string(256),
          'url' => $this->string(256),
  
          'status' => $this->smallInteger()->notNull()->defaultValue(0),
          'created_at' => $this->datetime()->notNull()->defaultValue(date("Y-m-d H:i:s")),
          'updated_at' => $this->datetime()->notNull()->defaultValue(date("Y-m-d H:i:s")),
        ]);
        
        $this->createTable('product_descriptor',[
          'id' => $this->primaryKey(),
          'product_id' => $this->integer()->notNull(),
          'language' => $this->integer(2)->notNull()->defaultValue(0),
          'title' => $this->string()->notNull(256),
          'header' => $this->string(256),
          'descriptor' => $this->string(),
          'keyword' => $this->string(256)
        ]);
  
      // creates index for column `id`
      $this->createIndex(
        'idx-product-id',
        'product',
        'id'
      );
  
      // add foreign key for table `product_descriptor`
      $this->addForeignKey(
        'fk-product-product_descriptor',
        'product_descriptor',
        'product_id',
        'product',
        'id',
        'CASCADE'
      );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropTable('product');
      $this->dropTable('product_descriptor');
    }

}
