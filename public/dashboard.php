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
$data['role'] = $_SESSION['backend_login_role'];
$data['username'] = $_SESSION['backend_login_name'];



// 取得總課程時數
$stmt = $pdo->prepare('SELECT sum(class_hours) FROM classes;');
$stmt->execute();
$class_hours = $stmt->fetch();
foreach($class_hours as $total) {
    $data['chart']['class_hours'] = $total; // 總課程時數
}


// 取得總天數
$stmt = $pdo->prepare('SELECT count(*) FROM attendance_log WHERE name = :name;');
$stmt->execute([":name" => "Alex"]);
$days = $stmt->fetch(PDO::FETCH_NUM); 
$data['chart']['days'] = $days[0];  // 總天數


// 取得總出席率, 總遲到率, 總早退率, 平均到校時數
$stmt = $pdo->prepare('SELECT round(sum(attended_hours/class_hours)/count(*), 4)* 100 as attend_rate, 
                              round(sum(late_hours/class_hours)/count(*), 4) * 100 as late_rate, 
                              round(sum(leave_early_hours/class_hours)/count(*), 4) * 100 as early_rate,
                              round(sum(raw_hours) / count(*), 1) as raw_rate
                       FROM `attendance_log`;');
$stmt->execute();
$rate = $stmt->fetch(PDO::FETCH_ASSOC);

$data['chart']['attend_rate'] = $rate['attend_rate']; // 總出席率
$data['chart']['late_rate'] = $rate['late_rate']; // 總遲到率
$data['chart']['early_rate'] = $rate['early_rate']; // 總早退率
$data['chart']['raw_rate'] = $rate['raw_rate']; // 平均到校時數


// 取得所有課程名稱, 平均課程達成率, 總課程數
$stmt = $pdo->prepare('SELECT c.class_name, ROUND(AVG(a.attended_hours/ a.class_hours), 4)* 100 as avg_att_rate
                    FROM classes c 
                    LEFT JOIN attendance_log a 
                    ON c.class_date = a.class_date 
                    GROUP BY c.class_name
                    ORDER BY c.class_name;');

$stmt->execute();
$cplmts = $stmt->fetchAll();
$data['chart']['class_num'] = $stmt->rowCount(); // 總課程數

foreach($cplmts as $cplmt) {
    $data['chart']['cplmt'][] =  $cplmt['avg_att_rate']; // 平均課程達成率
    $data['chart']['classList'][] = $cplmt['class_name']; // 所有課程名稱
}

// 課程達成率由大到小排列
// $sortIndex = array_keys($data['chart']['cplmt']);
// array_multisort($data['chart']['cplmt'], SORT_DESC, $data['chart']['classList'], SORT_DESC);

echo $twig->render('dashboard.html.twig', $data);