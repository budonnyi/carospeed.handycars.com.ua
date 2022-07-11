<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lead_form}}`.
 */
class m210706_110323_create_lead_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lead_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(15),
            'phone' => $this->string(15),
            'email' => $this->string(250),
            'message' => $this->text(),
            'status' => $this->integer(1),
            'created_at' => $this->integer(10),
            'updated_at' => $this->integer(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lead_form}}');
    }
}
