<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_feedback}}`.
 */
class m210706_062210_create_users_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_feedback}}', [
            'id' => $this->primaryKey(),
            'content_ru' => $this->text(),
            'content_ua' => $this->text(),
            'author_ru' => $this->string(100),
            'author_ua' => $this->string(100),
            'product' => $this->string(100),
            'status' => $this->integer(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users_feedback}}');
    }
}
