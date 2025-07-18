<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../inc/twig.inc.php';
require_once __DIR__ . '/../inc/db.inc.php'; 

$mode = '';
if (isset($_GET['mode']) & $_GET['mode'] != '') {
    $mode = $_GET['mode'];
}

$data['role'] = $_SESSION['backend_login_role'];
$data['username'] = $_SESSION['backend_login_name'];
$data['useracc'] = $_SESSION['backend_login_acc'];
$data['flag'] = true;

switch($mode) {
    case 'edit':
        $id = $_GET['id'];
        // var_dump($id);
        $sql = "SELECT * FROM attendance_log WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([":id" => $id]);
        $data['result'] = $stmt->fetch();
        $tmplFile = 'partial/backend/edit.html.twig';
        break;

    case 'savedata':
        // die(var_dump($_POST));
        $stmt = $pdo->prepare("UPDATE attendance_log SET name = :pname, class_date = :pdate, attended_hours = :patt, leave_early_hours = :pleave, absent_hours = :pabs where id = :pid");
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
        $tmplFile = 'partial/message.html.twig';
        break;

    case 'show':
        $name = $_GET['name'];
        $stmt = $pdo->prepare("SELECT name, 
                                      round(sum(class_hours), 1) as class_hours, 
                                      round(sum(attended_hours), 1) as attended_hours, 
                                      round(sum(absent_hours), 1) as absent_hours, 
                                      round(sum(late_hours), 1) as late_hours, 
                                      round(sum(leave_early_hours), 1) as leave_early_hours, 
                                      round((sum(attended_hours) / sum(class_hours)) * 100, 1) as attendance_rate 
                                      FROM `attendance_log` 
                                      where name = :name;");

        $stmt->execute([":name" => $name]);
        $records = $stmt->fetch(PDO::FETCH_ASSOC);
        $data['chart']['name'] = $name;
        $data['chart']['class_hours_total'] = $records['class_hours'];
        $data['chart']['attended_hours_total'] = $records['attended_hours'];
        $data['chart']['absent_hours_total'] = $records['absent_hours'];
        $data['chart']['late_hours_total'] = $records['late_hours'];
        $data['chart']['leave_early_hours_total'] = $records['leave_early_hours'];
        $data['chart']['attendance_rate'] = $records['attendance_rate'];

        $stmt = $pdo->prepare("SELECT class_date, attended_hours, raw_hours 
                               FROM `attendance_log` 
                               WHERE name = :name;");
        $stmt->execute([":name" => $name]);
        $data['chart']['rows'] = $stmt->rowCount();
        $record2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($record2 as $record) {
            $data['chart']['class_date'][] = $record['class_date'];
            $data['chart']['attended_hours'][] = $record['attended_hours'];
            $data['chart']['raw_hours'][] = $record['raw_hours'];
        }
        $tmplFile = 'partial/backend/show_att.html.twig';
        echo $twig->render($tmplFile, $data);
        exit();

    case 'add_data':
        $data['flag'] = true;
        $data['useracc'] = $_SESSION['backend_login_acc'];
        $tmplFile = 'partial/backend/add_data.html.twig';
        echo $twig->render($tmplFile, $data);
        exit();

    case 'add_stdata':
        // 取得所有學員名稱
        $stmt = $pdo->prepare('SELECT name FROM attendance_log group by name;');
        $stmt->execute();
        $nameArray = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // 驗證使用者輸入的學員名稱為班級學員
        if(!in_array($_POST['pname'], $nameArray)) {
            $data['message'] = '您輸入的學員不在學員名單內，請重新輸入。';
            $data['flag'] = false;
        }

        // 確保使用者只能新增今日之前的紀錄
        if($_POST['pdate'] > date('Y-m-d')) {
            $data['message'] = '日期格式錯誤，請輸入今日以前的日期。';
            $data['flag'] = false;
        }

        // 驗證出席時數不得大於課程總時數
        if((int)$_POST['patt'] > (int)$_POST['pclass']) {
            $data['message'] = '出席時數不得大於課程總時數，請重新輸入。';
            $data['flag'] = false;
        }

        // 驗證缺席時數不得大於課程總時數
        if((int)$_POST['pabs'] > (int)$_POST['pclass']) {
            $data['message'] = '缺席時數不得大於課程總時數，請重新輸入。';
            $data['flag'] = false;
        }

        // 驗證出缺席時數總和不得大於課程總時數
        if((int)$_POST['pclass'] <= 3) {
            // 當日課程時數為3小時
            if(((int)$_POST['patt'] + (int)$_POST['pabs']) > 3) {
                $data['message'] = '出缺席時數總和不得大於課程總時數。';
                $data['flag'] = false;
            }
        }
        
        if((int)$_POST['pclass'] <= 6) {
            // 當日課程時數為6小時
            if(((int)$_POST['patt'] + (int)$_POST['pabs']) > 6) {
                $data['message'] = '出缺席時數總和不得大於課程總時數。';
                $data['flag'] = false;
            }

        } else {
            // 當日課程時數為7小時
            if(((int)$_POST['patt'] + (int)$_POST['pabs']) > 7) {
                $data['message'] = '出缺席時數總和不得大於課程總時數。';
                $data['flag'] = false;
            }
        }

        if($data['flag'] === false) {
            $data["alert_type"] = "alert-danger";
            $tmplFile = 'partial/backend/add_data.html.twig';
            echo $twig->render($tmplFile, $data);
            exit();
        }

        $stmt = $pdo->prepare(
            "INSERT INTO attendance_log (name, class_date, class_hours, raw_hours, attended_hours, 
            late_hours, leave_early_hours, absent_hours) VALUES 
            (:pname, :pdate, :pclass, :praw, :patt, :plate, :pleave, :pabs)"
        );

        $stmt->execute([
            ":pname" => $_POST['pname'],
            ":pdate" => $_POST['pdate'],
            ":pclass" => $_POST['pclass'],
            ":praw" => (int)$_POST['patt'] + 1.5,
            ":patt" => $_POST['patt'],
            ":plate" => $_POST['plate'],
            ":pleave" => $_POST['pleave'],
            ":pabs" => $_POST['pabs']
        ]);

        $data["message"] = "您已成功新增學員 ".$_POST['pname']." 於 ".$_POST['pdate']." 的出缺勤資料";
        $data["alert_type"] = "alert-success";
        $tmplFile = 'partial/message.html.twig';
        break;

    case 'add_user':
        $data['transition'] = 'user';
        $tmplFile = 'partial/backend/add_user.html.twig';
        echo $twig->render($tmplFile, $data);
        exit();

    case 'add_user_data':
        // 取得所有學員名稱
        $stmt = $pdo->prepare('SELECT acc, user_name FROM admin_user');
        $stmt->execute();
        $nameArray = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $data['transition'] = 'user';
        $stmt = $pdo->prepare('INSERT INTO admin_user (acc, pwd, role, user_name) VALUES (:acc, MD5(:pwd), :role, :name)');
        $stmt->execute([
            ":acc" => $_POST['acc'],
            ":pwd" => $_POST['pwd'],
            ":role" => $_POST['role'],
            ":name" => $_POST['username']
        ]);
    
        $data["message"] = "您已成功新增使用者-" . $_POST['username'];
        $data["alert_type"] = "alert-success";
        $tmplFile = 'partial/message.html.twig';
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
        $tmplFile = 'partial/message.html.twig';
        break;

    case 'deluser':
        $data["transition"] = "user";    
        $stmt = $pdo->prepare("delete from admin_user where no = :id");
        $stmt->execute(
            [
             ":id"=>$_GET['id']
            ]
        );
        $data["message"] = "您已成功刪除該使用者";
        $data["alert_type"] = "alert-warning";
        $tmplFile = 'partial/message.html.twig';
        break;

    case 'acc_manage':
        $stmt = $pdo->prepare("SELECT no, acc, pwd, role, user_name FROM `admin_user` WHERE role != :role;");
        $stmt->execute([
            ":role" => "admin"
        ]);
        $acc_results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($acc_results as $acc) {
            $data['user'][] = $acc;
        }
        $tmplFile = 'partial/backend/acc_manage.html.twig';
        break;
    
    case 'edit_user':
        $id = $_GET['id'];
        $sql = "SELECT no, acc, pwd, user_name, role FROM admin_user WHERE no = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([":id" => $id]);
        $data['result'] = $stmt->fetch();
        if ($_GET['status'] === 'reset') {
           $data['result']['pwd'] = 'test1234';
        } 
        $tmplFile = 'partial/backend/edit_user.html.twig';
        break;
        
    case 'save_user_data':
        if  ($_POST['role'] != 'admin') {
            $stmt = $pdo->prepare("UPDATE admin_user SET acc = :acc, pwd = MD5(:pwd), role = :role, user_name = :username where no = :id");
            $stmt->execute([
                ":id" => $_POST['id'],
                ":acc" => $_POST['acc'],
                ":pwd" => $_POST['pwd'],
                ":role" => $_POST['role'],
                ":username" => $_POST['username']
            ]);
    
            $data["message"] = "您已成功更新使用者 " . $_POST['username'] . " 的資料-ID為 " . $_POST['id']." 的資訊，修改了 " . $stmt->rowCount() . " 筆資料";
            $data["alert_type"] = "alert-success";
            $data["transition"] = "user";
            $tmplFile = 'partial/message.html.twig';
            break;
        } else {
            $data["message"] = "系統管理帳號僅此一位，無法新增其他系統管理員";
            $data["alert_type"] = "alert-danger";
            $data["transition"] = "user";
            $tmplFile = 'partial/message.html.twig';
            break;
        }
}

echo $twig->render($tmplFile, $data);