<?php
/**
展示所有数据
 */
require ('inc/conn.php');
require ('inc/lib.php');
header('Content-type:text/html;charset=utf-8');
$sql='select * from msg_ly';
/*
$rs=mysql_query($sql,$conn);
if(!$rs){
    echo "查询失败".mysql_error();
    exit;
}
$list=array();
while($row=mysql_fetch_assoc($rs)){
    $list[]=$row;
}*/

$list= selAll($sql,$conn);
//print_r($list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言信息页面</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<table border="1">
    <tr>
        <td>标题</td>
        <td>姓名</td>
        <td>详细</td>
        <td>修改</td>
        <td>删除</td>
    </tr>
    <?php foreach($list as $v) {   ?>
        <tr>
            <td><?php echo $v['title'];?></td>
            <td><?php echo $v['name'];?></td>
            <td><a href="show.php?id=<?php echo $v['id'];?>">详细</a></td>
            <td><a href="up.php?id=<?php echo $v['id'];?>">修改</a></td>
            <td><a href="del.php?id=<?php echo $v['id'];?>">删除</a></td>
        </tr>
    <?php }?>
</table>
</body>
</html>
