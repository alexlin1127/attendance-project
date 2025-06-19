<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../inc/twig.inc.php';
require_once __DIR__ . '/../inc/db.inc.php'; 

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
        $tmplFile = 'partial/message.html.twig';
        break;

    case 'show':
        $name = $_GET['name'];
        $stmt = $pdo->prepare("select * from attendance_log where name = :name");
        $stmt->execute([":name" => $name]);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data['chart']['date'] = [];
        
        foreach($records as $record) {
            $data['chart']['date'][] = $record['class_date'];
        }
        exit();

    case 'add_data':
        $data['flag'] = true;
        $tmplFile = 'partial/backend/add_data.html.twig';
        echo $twig->render($tmplFile, $data);
        exit();

    case 'add_stdata':
        // 取得所有學員名稱
        $stmt = $pdo->prepare('select name from attendance_log group by name;');
        $stmt->execute();
        $nameArray = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $data['flag'] = true;

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

        // $stmt = $pdo->prepare("insert into attendance_log (name, class_date, class_hours, raw_hours, attended_hours, 
        //                        late_hours, leave_early_hours, absent_hours) values ( name = :pname, class_date = :pdate, 
        //                        class_hours = :pclass, raw_hours = :praw, attended_hours = :patt, late_hours = :plate, 
        //                        leave_early_hours = :pleave, absent_hours = :pabs;");

        // $stmt->execute(
        //     [
        //         ":pname" => $_POST['pname'],
        //         ":pdate" => $_POST['pdate'],
        //         ":pclass" => $_POST['pclass'],
        //         ":praw" => (int)$_POST['patt'] + 1.5,
        //         ":patt" => $_POST['patt'],
        //         ":plate" => $_POST['plate'],
        //         ":pleave" => $_POST['pleave'],
        //         ":pabs" => $_POST['pabs']
        //     ]
        // );

        $data["message"] = "您已成功新增學員 ".$_POST['pname']." 於 ".$_POST['pdate']." 的出缺勤資料";
        $data["alert_type"] = "alert-success";
        $tmplFile = 'partial/message.html.twig';
        break;
    

    case 'deldata':    
        // $stmt = $pdo->prepare("delete from attendance_log where id = :id");
        // $stmt->execute(
        //     [
        //      ":id"=>$_GET['id']
        //     ]
        // );
        $data["message"] = "您已成功刪除資料-ID為".$_GET['id']."的資訊";
        $data["alert_type"] = "alert-warning";
        $tmplFile = 'partial/message.html.twig';
        break;

        
}

echo $twig->render($tmplFile, $data);