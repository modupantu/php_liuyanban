<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-14
 * Time: 14:59
 * 修改数据页面
 */
require ('inc/conn.php');
require ('inc/lib.php');
$id=$_GET['id'];
$sql="select * from msg_ly where id=$id ";
$info=selRow($sql,$conn);
//print_r($info);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改留言</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h2{
            text-align: center;
            font-size: 24px;
            color: rebeccapurple;
        }
        form{
            padding: 10px;
            width: 200px;
            height: 200px;
            background: aquamarine;
            margin: 0 auto;
        }
        input{
            display:block;
        }
    </style>
</head>
<body>
<h2>修改留言</h2>
<form method="post" action="up_ok.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    <label for="title">主题</label>
    <input type="text" id="title" name="title" value="<?php echo $info['title']; ?>">
    <label for="name">姓名</label>
    <input type="text" name="name" id="name" value="<?php echo $info['name']; ?>">
    <label for="content">内容</label>
    <input type="text" name="content" id="content" value="<?php echo $info['content']; ?>">
    <input type="submit" value="提交">
</form>
</body>
</html>
