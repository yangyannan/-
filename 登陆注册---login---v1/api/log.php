<?php
//php处理跨域的接口
header('Access-Control-Allow-Origin:*');

    include("conn.php");

    //数组
    $uName = $_GET["uName"];
    $uPwd = $_GET["uPwd"];
    $token=$_GET["token"];
    // $arr=array("uName"=>$uName,"uPwd"=>$uPwd)
    // echo json_encode($arr);

    $sql ="select * from user where name='{$uName}'";
    $result=mysql_query($sql);
    $rs=mysql_Fetch_assoc($result);
    $num=mysql_num_rows($result);
    if($num>0)
    {
        if($uPwd==$rs["age"]){
            $arr=array("msg"=>"loginOK");
            echo json_encode($arr);
        }
        else
        {
            
            $arr=array("msg"=>"pwd no");
            echo json_encode($arr);
        }
    }
    else
    {
        $arr=array("msg"=>"no");
        echo json_encode($arr);
    }
?>
