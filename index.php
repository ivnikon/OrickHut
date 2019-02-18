<?php
date_default_timezone_set("Europe/Moscow");
require_once 'functions.php';
require_once 'data.php';
require_once 'db_connect.php';
//session_start();
$page_content = renderTemplate('templates/index-template.php', [
    'lots' => $lots,
    'category' => $category ]);
$layout_content = renderTemplate('templates/layout-template.php',[
    'title' => 'OrickHub - Main',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'content' => $page_content,
    'category' => $category ]);

print($layout_content);
?>

