<?php
    class Dao {

        private $host = "us-cdbr-east-06.cleardb.net";
        private $db = "heroku_f1e59abd068dd45";
        private $user = "b54b1f17455226";
        private $pass = "8cc483b9";

        public function getConnection () {
          try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
          } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
          }
        }

        public function authenticate ($name, $email) {
          // input validation
          if ($name == '' || $email == '') {
            $_SESSION['error'] = "One or more of the following fields are blank.";
            return false;
          }

          $conn = $this->getConnection();
          $name = strtolower($name);
          $email = strtolower($email);
          $sql = "SELECT name FROM users WHERE email = :email";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->execute();
          $storedName = $stmt->fetchColumn();

          if ($storedName) {
              // Email exists
              if ($name === $storedName) {
                  // Name matches, authenticate user
                  return true;
              } else {
                  // Name does not match, reject login
                  $_SESSION['error'] = "This email is already associated with
                  a different name.";
                  return false;
              }
          } else {
            // Email does not exist, insert new user
              $insertSql = "INSERT INTO users (name, email) VALUES (:name, :email)";
              $insertStmt = $conn->prepare($insertSql);
              $insertStmt->bindParam(':name', $name, PDO::PARAM_STR);
              $insertStmt->bindParam(':email', $email, PDO::PARAM_STR);
              $insertStmt->execute();
              return true; // Authenticate new user
          }
        }

   } // end Dao
