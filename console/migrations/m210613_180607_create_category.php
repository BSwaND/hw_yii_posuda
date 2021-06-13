<?php
  
  use yii\db\Migration;
  
  /**
   * Class m210613_180607_create_category
   */
  class m210613_180607_create_category extends Migration
  {
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('category',[
        'id' => $this->primaryKey(),
        'name' => $this->string(32)->notNull(),
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
      $this->dropTable('category');
    }
  }
