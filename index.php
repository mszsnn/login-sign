<?php
    $zhanghao=$_REQUEST['name'];
    $pass=$_REQUEST['password'];
    if($zhanghao==='admin'&&$pass==='123'){
        $mess='登录成功';
        $href='index.html';
    }else{
        $mess='登录失败';
        $href='login.html';
    }
    include_once 'mess.html';
?>