 <?php

    // 連線設定
    $host = 'localhost';        
    $dbName = 'myatt';  
    $username = 'myattdb';      
    $password = '16d7a4fca7442dda3ad93c9a726597e4';          
    $charset = 'utf8mb4';
    $port = '3308';

    // DSN (Data Source Name)
    $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset={$charset}";

    // PDO 連接選項
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,    
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    // 建立連線
    try {
        $pdo = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        die("資料庫連接失敗: " . $e->getMessage());
    }