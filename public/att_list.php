<?php
require_once "../inc/db.inc.php";
require_once __DIR__ . '/../vendor/autoload.php';
require_once "../inc/twig.inc.php";


// switch ($_GET):
//     case 'select':

//         break;
//     default:
//取得各學員打卡時間總數
$stmt = $pdo->prepare("select count(*) as total from attendance_log");
$stmt->execute();
$total = $stmt->fetch();

//每頁顯示的筆數
$perPage = 10;

//取得目前頁數(有的話轉換為整數，沒有的話預設為1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
//計算跳過的筆數
$offset = ($page) * $perPage;
//計算總頁數
$totalPages = ceil($total['total'] / $perPage);

//取得分頁資料
$stmt = $pdo->prepare("select * from attendance_log order by id desc limit :offset, :perPage");
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$stmt->execute();
$data['prevpage']= ($page-1 > 0)? $page-1 : 0;
$data['nextpage'] = $page+1;
$data["results"] = [];
 while($row = $stmt->fetch()) {
    $data["results"][] = $row;
};
// print_r($data["results"]) ;


//取得所有學員姓名
// $stmt = $pdo->prepare("select id, name from students");
// $stmt->execute();

//twig 模板引擎
echo $twig->render('/backend/att_list.html.twig', $data);
   

