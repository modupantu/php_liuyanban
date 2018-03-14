<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoru
 * Date: 2018-3-14
 * 留言的删除页面
 * Time: 16:17
 * 删除一条留言
 * 展示 是否删除成功
 */
require ('inc/conn.php');

$id=$_GET['id'];
//echo $id;
$sql="delete from msg_ly where id=$id";
//此处的$rs是语句语法本身的正确执行,如果我们把id修改为99999 提示也是成功
//$rs为真并不意味着===真正意义上的成功
//mysql_fetch_rows();此函数,可以知道删除所影响的行数
$rs=mysql_query($sql,$conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>删除页面</title>
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
    <h1>删除成功</h1>
<?php }else { ?>
    <h1>删除失败</h1>
<?php } ?>
</body>
</html>
