<?php


class m0002_add_password_column
{
    public function up()
    {
        $db = \sarahh1417\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN IF NOT EXISTS password varchar(512) NOT NULL ");
    }

    public function down()
    {
        $db = \sarahh1417\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN IF NOT EXISTS password");
    }
}