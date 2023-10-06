<?php
    class Dao {
        private $host = "us-cdbr-east-06.cleardb.net";
        private $db = "heroku_f1e59abd068dd45";
        private $user = "b54b1f17455226";
        private $pass = "8cc483b9";
        public function getConnection () {
            return new PDO("mysql:host={$this->host};dbname={$this->db};user={$this->user};password={$this->pass};");
        }
    }
?>