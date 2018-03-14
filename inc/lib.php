<?php
/**
作用:封装 查询 函数
 */
//返回所有数据
function selAll($sql,$conn){
    $rs=mysql_query($sql,$conn);
    if(!$rs){
/*        echo "查询失败".mysql_error;
        exit;*/
        showError();
    }
    $list=array();
    while($row=mysql_fetch_assoc($rs)){
        $list[]=$row;
    }
    return $list;
}
//返回一行数据
function selRow($sql,$conn){
    $rs=mysql_query($sql,$conn);
    if(!$rs){
/*        echo "查询失败".mysql_error();
        exit;*/
        showError();
    }
    return mysql_fetch_assoc($rs);
}
function showError(){
    echo "查询失败".mysql_error();
    exit;
}
