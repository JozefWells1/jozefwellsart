<?php
session_start();

require_once 'Dao.php';
// Sanitize and validate user input
$name = trim($_POST['name']) ?? '';
$sanitizedName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$sanitizedEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$dao = new Dao();
$_SESSION['authenticated'] = $dao->authenticate($sanitizedName, $sanitizedEmail);
$_SESSION['user'] = $sanitizedName;
$_SESSION['email'] = $sanitizedEmail;

if ($_SESSION['authenticated']) {
   header('Location: homePage.php');
} else {
   header('Location: LoginPage.php');
}
exit;
