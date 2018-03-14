<?php
/**
查看具体的信息
 */
require ('inc/conn.php');
require ('inc/lib.php');
header('Content-type:text/html;charset=utf-8');
$id=$_GET['id']+0;
$sql="select * from msg_ly where id=$id ";
/*
$rs=mysql_query($sql,$conn);
if(!$rs){
    echo "查询失败".mysql_error();
    exit;
}*/
$info=selRow($sql,$conn);
//print_r($info);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $info['title'] ?></h1>
    <h2><?php echo $info['name'] ?></h2>
    <h2><?php echo $info['content'] ?></h2>
</body>
</html>
