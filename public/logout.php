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
</body>

</html>