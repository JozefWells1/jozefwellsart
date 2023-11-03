<?php
session_start();

require_once 'Dao.php';
// Sanitize and validate user input
$name = trim($_POST['name']) ?? '';
$email = trim($_POST['email']) ?? '';

// Escape output before displaying it
$escapedUser = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

$dao = new Dao();
$_SESSION['authenticated'] = $dao->authenticate($name, $email);
$_SESSION['user'] = $name;

if ($_SESSION['authenticated']) {
   header('Location: homePage.php');
} else {
   header('Location: LoginPage.php');
}
exit;
