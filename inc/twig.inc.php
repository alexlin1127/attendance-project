<?php
require_once __DIR__ . '/../vendor/autoload.php';

// 只在vendor中使用我們需要的外掛
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// 設定時區
date_default_timezone_set('Asia/Taipei');

$loader = new FilesystemLoader(__DIR__ . '/../templates');

// Twig 環境設定
$twig = new Environment($loader, [
    // 'cache' => __DIR__ . '/../cache', 
    'cache' => false,
    'debug' => false,                
]);

// 載入 Twig 除錯擴展 (只有在 debug 為 true 時才啟用)
if ($twig->isDebug()) {
    $twig->addExtension(new \Twig\Extension\DebugExtension());
}