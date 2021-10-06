<?php

class m0001_initial {
    public function up()
    {
        $db = sarahh1417\phpmvc\Application::$app->db;
        $query ="CREATE TABLE IF NOT EXISTS USERS 
                 (id INT AUTO_INCREMENT PRIMARY KEY,
                 email varchar(255)  NOT NULL,
                 firstname varchar(255) NOT NULL,
                 lastname varchar(255)  NOT NULL,
                 status TINYINT NOT NULL,
                 createad_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                 ) ENGINE=INNODB;";
        $db->pdo->exec($query);
    }

    public function down()
    {
        $db = sarahh1417\phpmvc\Application::$app->db;
        $query = "DROP TABLE USERS";
        $db->pdo->exec($query);
    }
}