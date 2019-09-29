<?php
//php处理跨域的接口
header('Access-Control-Allow-Origin:*');

    include("conn.php");

    //数组
    $uName = $_GET["uName"];
    $uPwd = $_GET["uPwd"];
    $token = base64_encode(time());

    //$arr = array("username"=>$username,"pwd"=>$pwd);
    
    $sql = "insert into user(name,age,token) values('{$uName}','{$uPwd}','{$token}')";
    if(mysql_query($sql)){
        $arr = array("msg"=>"ok","token"=>$token);
        echo json_encode($arr);
    }else{
        $arr = array("msg"=>"no");
        echo json_encode($arr);
    }

?>