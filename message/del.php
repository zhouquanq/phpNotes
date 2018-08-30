<?php 
//引入cont文件，使用get方式获取id，使用sql语句删除id
include 'functions.php';
include 'cont.php';
    $id = $_GET['cid'];
    $sql="delete from message where id=$id";
    $link->query($sql);
    success('删除成功!','./index.php');
?>

