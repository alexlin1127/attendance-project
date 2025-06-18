<?php
require_once "../inc/db.inc.php";
require_once __DIR__ . '/../vendor/autoload.php';
require_once "../inc/twig.inc.php";

$mode = '';
if (isset($_GET['mode']) & $_GET['mode'] != '') {
    $mode = $_GET['mode'];
}


switch($mode) {
    //編輯清單
    case 'edit':
        $id = $_GET['id'];
        // var_dump($id);
        $sql = "select * from attendance_log where id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([":id" => $id]);
        $data['result'] = $stmt->fetch();
        $tmplFile = 'partial/backend/edit.html.twig';
        break;

    //儲存編輯至資料庫
    case 'savedata':
        // die(var_dump($_POST));
        $stmt = $pdo->prepare("update attendance_log set name = :pname, class_date = :pdate, attended_hours = :patt, leave_early_hours = :pleave, absent_hours = :pabs where id = :pid");
        $stmt->execute(
            [
            ":pname" => $_POST['pname'],
            ":pdate" => $_POST['pdate'],
            ":patt" => $_POST['patt'],
            ":pleave" => $_POST['pleave'],
            ":pabs" => $_POST['pabs'],
            ":pid"=>$_POST['pid']
            ]
         );
        $data["message"] = "您已成功更新".$_POST['pname']."的資料-ID為".$_POST['pid']."的資訊，修改了".$stmt->rowCount()."筆資料";
        $data["alert_type"] = "alert-success";
        $tmplFile = 'message.twig';
        break; 

    case 'deldata':    
        $stmt = $pdo->prepare("delete from attendance_log where id = :id");
        $stmt->execute(
            [
             ":id"=>$_GET['id']
            ]
        );
        $data["message"] = "您已成功刪除資料-ID為".$_GET['id']."的資訊";
        $data["alert_type"] = "alert-warning";
        $tmplFile = 'message.twig';
        break; 
}

echo $twig->render($tmplFile, $data);