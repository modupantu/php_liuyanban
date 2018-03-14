<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-14
 * Time: 13:59
 * 接受留言
 * 发送留言到库
 */
require ('inc/conn.php');
$title=$_POST['title'];
$name=$_POST['name'];
$content=$_POST['content'];

$sql="insert into msg_ly(title,name,content) values('$title','$name','$content')";
$rs=mysql_query($sql,$conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function a() {
            setTimeout(function () {
                window.location.href='list.php';
            },2000);
        }
        a();
    </script>
</head>
<body>
    <?php if($rs){ ?>
    <h1>留言成功</h1>
    <?php }else { ?>
    <h1>留言失败</h1>
    <?php } ?>
</body>
</html>
