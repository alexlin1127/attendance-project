 <?php

    // 連線設定
    $host = 'localhost';        
    $dbName = 'myatt';  
    $username = 'myattdb';      
    $password = 'muiWLyczhj0[L92/';          
    $charset = 'utf8mb4';

    // DSN (Data Source Name)
    $dsn = "mysql:host={$host};dbname={$dbName};charset={$charset}";

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