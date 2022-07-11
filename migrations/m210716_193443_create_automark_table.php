<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%automark}}`.
 */
class m210716_193443_create_automark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%automark}}', [
            'id' => $this->primaryKey(),
            'car' => $this->string(50),
            'car_ru' => $this->string(50),
            'car_ua' => $this->string(50),
            'content_ru' => $this->text(),
            'content_ua' => $this->text(),
            'status' => $this->integer(1),
            'viewed' => $this->integer(10),
            'created_at' => $this->integer(10),
            'updated_at' => $this->integer(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%automark}}');
    }
}
