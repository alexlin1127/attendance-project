<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../inc/twig.inc.php';
require_once __DIR__ . '/../inc/db.inc.php';

// 取得所有學員姓名（給下拉選單用）
$stmt = $pdo->query("SELECT name FROM attendance_log GROUP BY name");
$data['students'] = $stmt->fetchAll();

$selected_name = $_GET['student_name'] ?? '';
$start_date = $_GET['start_date'] ?? '';
$end_date = $_GET['end_date'] ?? '';

$data['selected_name'] = $selected_name;
$data['start_date'] = $start_date;
$data['end_date'] = $end_date;

// 分頁
$perPage = 10;
$page = max(1, (int)($_GET['page'] ?? 1));
$offset = ($page - 1) * $perPage;

// 組 where 條件
$where = [];
$params = [];
if ($selected_name) {
    $where[] = "name = :name";
    $params[':name'] = $selected_name;
}
if ($start_date) {
    $where[] = "class_date >= :start";
    $params[':start'] = $start_date;
}
if ($end_date) {
    $where[] = "class_date <= :end";
    $params[':end'] = $end_date;
}
$whereSql = $where ? 'WHERE ' . implode(' AND ', $where) : '';

// 日期錯誤檢查
$data['dateError'] = ($start_date && $end_date && $start_date > $end_date);

// 組查詢字串
$query = array_filter([
    'student_name' => $selected_name,
    'start_date' => $start_date,
    'end_date' => $end_date
]);
$data['queryString'] = http_build_query($query);

// 查總筆數
$sqlCount = "SELECT COUNT(*) as total FROM attendance_log $whereSql";
$stmt = $pdo->prepare($sqlCount);
$stmt->execute($params);
$total = $stmt->fetch();
$totalPages = max(1, ceil($total['total'] / $perPage));

// 查分頁資料
$sql = "SELECT * FROM attendance_log $whereSql LIMIT :offset, :perPage";
$stmt = $pdo->prepare($sql);
foreach ($params as $k => $v) {
    $stmt->bindValue($k, $v);
}
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$stmt->execute();
$data['results'] = $stmt->fetchAll();

// 匯出 JSON
if (isset($_GET['download']) && $_GET['download'] == 1) {
    header('Content-Type: application/json');
    header('Content-Disposition: attachment; filename="reports.json"');
    echo json_encode($data['results'], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// 分頁資訊
$data['prevpage'] = max(1, $page - 1);
$data['nextpage'] = min($totalPages, $page + 1);
$data['totalPages'] = $totalPages;
$data['currentPage'] = $page;

// 使用者資訊
$data['useracc'] = $_SESSION['backend_login_acc'];
$data['role'] = $_SESSION['backend_login_role'];
$data['username'] = $_SESSION['backend_login_name'];

// 渲染模板
echo $twig->render('partial/backend/att_list.html.twig', $data);