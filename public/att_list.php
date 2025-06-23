<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../inc/twig.inc.php';
require_once __DIR__ . '/../inc/db.inc.php'; 


// 取得所有學員姓名（給下拉選單用）
$stmt = $pdo->prepare("SELECT name FROM attendance_log GROUP BY name");
$stmt->execute();
$data['students'] = $stmt->fetchAll();

// 取得篩選參數
$selected_name = $_GET['student_name'] ?? '';
$start_date = $_GET['start_date'] ?? '';
$end_date = $_GET['end_date'] ?? '';

// 傳進data陣列
$data['selected_name'] = $selected_name;
$data['start_date'] = $start_date;
$data['end_date'] = $end_date;

// 分頁設定
$perPage = 10;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;

// 篩選條件和參數
$where = [];
$params = [];
$whereSql = '';

if (!empty($selected_name)) {
    $where['name'] = "name = :sname";
    $params[':sname'] = $selected_name;
}

if (!empty($start_date)) {
    $where['start_date'] = "class_date >= :start";
    $params[':start'] = $start_date ; 
}

if (!empty($end_date)) {
    $where['end_date'] = "class_date <= :end";
    $params[':end'] = $end_date ;
}

if ($where) {
    $whereSql = implode(' AND ', $where);
}

//end_date需比start_date大
$data['dateError'] = false;

if (!empty($start_date) && !empty($end_date)) {
    if ($start_date > $end_date) {
        $data['dateError'] = true;
    }
}

//組query string給分頁
$query = [];
if (!empty($selected_name)) {
    $query['student_name'] = $selected_name;
}

if (!empty($start_date)) {
    $query['start_date'] = $start_date;
}

if (!empty($end_date))  {
    $query['end_date'] = $end_date;
}

$data['queryString'] = http_build_query($query);

// 篩選後的總筆數
$sqlCount = "SELECT COUNT(*) as total FROM attendance_log";
$stmt = $pdo->prepare($sqlCount);
$stmt->execute();
$total = $stmt->fetch();
$totalCount = $total['total'];

// 計算總頁數
$totalPages = ceil($totalCount / $perPage);

// 查詢分頁資料
$sql = "SELECT * FROM attendance_log";
if ($whereSql) {
    $sql .= " WHERE " . $whereSql;
}
$stmt = $pdo->prepare($sql);
foreach ($params as $key => $val) {
    $stmt->bindValue($key, $val);
}
$stmt->execute();
$filteredData = $stmt->fetchAll();
if (isset($_GET['download']) && $_GET['download'] == 1) {
    header('Content-Type: application/json');
    header('Content-Disposition: attachment; filename="reports.json"');
    echo json_encode($filteredData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$sql .= " LIMIT :offset, :perPage";
$stmt = $pdo->prepare($sql);

foreach ($params as $key => $val) {
    $stmt->bindValue($key, $val);
}

$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);

$stmt->execute();
$data['results'] = $stmt->fetchAll();

// 分頁資訊傳給模板
$data['prevpage'] = ($page - 1 > 0) ? $page - 1 : 1;
$data['nextpage'] = ($page + 1 <= $totalPages) ? $page + 1 : $totalPages;
$data['totalPages'] = $totalPages;
$data['currentPage'] = $page;

// 指定模板路徑
$tmplFile = 'partial/backend/att_list.html.twig';

// Todo: 此處待修改為登入使用者 
$data['useracc'] = $_SESSION['backend_login_acc'];
$data['role'] = $_SESSION['backend_login_role'];
$data['username'] = $_SESSION['backend_login_name'];


// 使用 twig 模板引擎渲染
echo $twig->render($tmplFile, $data);
