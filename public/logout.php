<?php
session_start();
session_destroy();//清空session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    header("location: login.php");
?>

<body>

    <!-- 帳號已登出<br>
    <a href="login.php">重新登入</a> -->
    
</body>

</html>