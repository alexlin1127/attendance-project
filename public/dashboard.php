<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../inc/twig.inc.php';
require_once __DIR__ . '/../inc/db.inc.php'; 

if (isset($_SESSION['backend_login_flag']) && $_SESSION['backend_login_flag'] == true) {
    // 如果有登入的話$_SESSION['backend_login_flag'] 為 true
} else {
    header("location: login-v2.php?message=nologin");
}

$data['useracc'] = $_SESSION['backend_login_acc'];

echo $twig->render('dashboard.html.twig', $data);