 <?php
    require_once __DIR__ . '/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    // 連線設定
    $host = $_ENV['DB_HOST'];
    $dbName = $_ENV['DB_NAME'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];
    $charset = $_ENV['DB_CHARSET'];
    $port = $_ENV['DB_PORT'];

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