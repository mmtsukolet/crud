<?php

    require_once 'model/ValidationException.php';

    class Database 
    {
        public function openDb() 
        {
            if (!mysql_connect("localhost", "root", "")) {
                throw new Exception("Connection to the database server failed!");
            }

            if (!mysql_select_db("crud")) {
                throw new Exception("No crud database found on database server.");
            }
        }
        
        public function closeDb() 
        {
            mysql_close();
        }
    }
?>
