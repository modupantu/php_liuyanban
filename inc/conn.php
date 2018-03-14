<?php
/*
 * 链接数据库公共文件
 * */
$conn=mysql_connect('localhost','root','root');
if(!$conn){
    echo "链接失败";
    exit;
}
$sql='use msg';
mysql_query($sql,$conn);
