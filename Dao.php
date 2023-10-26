<?php
    class Dao {

        private $host = "us-cdbr-east-06.cleardb.net";
        private $db = "heroku_f1e59abd068dd45";
        private $user = "b54b1f17455226";
        private $pass = "8cc483b9";

        public function getConnection () {
            return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
        }

       public function authenticate ($user_name, $user_email) {
          // TODO make an actual table.
          return ($user_name == "Jozef" && $user_email == 'email@email.com');
       }
   } // end Dao
