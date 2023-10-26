<?php
session_start();

require_once 'Dao.php';

$user_name = trim($_POST['user_name']);
$user_email = trim($_POST['user_email']);

echo "$username"; //test what was inputted

$dao = new Dao();
$_SESSION['authenticated'] = $dao->authenticate($user_name, $user_email);

if ($_SESSION['authenticated']) {
   header('Location: homePage.php');
} else {
   header('Location: LoginPage.php');
}
exit;
