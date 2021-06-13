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
          'name' => $this->string(32)->notNull(),
          'price' => $this->integer()->notNull(),
          'image' => $this->string(256),
  
          'status' => $this->smallInteger()->notNull()->defaultValue(0),
          'created_at' => $this->datetime()->notNull()->defaultValue(date("Y-m-d H:i:s")),
          'updated_at' => $this->datetime()->notNull()->defaultValue(date("Y-m-d H:i:s")),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210613_163544_create_product cannot be reverted.\n";

        return false;
    }
    */
}
