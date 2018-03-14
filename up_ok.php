<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-14
 * Time: 15:21
 *接收修改的数据  以id为标志
 * $_post['id'];
 * 根据返回结果,做判断,提示用户
 */
require ('inc/conn.php');
//require ('inc/lib.php');
header('Content-type:text/html;charset=utf-8');
$id = $_POST['id'] + 0;

$title=$_POST['title'];
$name=$_POST['name'];
$content=$_POST['content'];
$sql="update msg_ly set title='$title',name='$name',content='$content' where id=$id";
//echo $sql;
$rs=mysql_query($sql,$conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改页面</title>
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
    <h1>修改成功</h1>
<?php }else { ?>
    <h1>修改失败</h1>
<?php } ?>
</body>
</html>

