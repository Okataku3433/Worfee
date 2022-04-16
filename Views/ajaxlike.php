<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');

$user = new User();

// 別モデルとの連携
$dbh = $user->checkLike($_POST['shop_id']);

?>