<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// 設定時區
date_default_timezone_set('Asia/Taipei');

$loader = new FilesystemLoader(__DIR__ . '/../templates');

// Twig 環境設定
$twig = new Environment($loader, [
    'cache' => false,
    'debug' => false,                
]);