<?php
    // echo "hollow word";
    // $arr=array("msg"=>"200","data" => array("username" => "xiaolan","age" => 18,"color"=>"red"));

    // echo json_encode($arr);//关联数组转化为json字符串
    $username=$_GET['username'];
    
    $coon=new mysqli("localhost","root","","qq-confirmation","3306");
    $sql="select * from qq_entry WHERE username='$username'";
    $result=$coon -> query($sql);
    $rows=$result -> fetch_assoc();
    if($rows){
        $arr=array("msg"=>200,"data" => array("code" => "200","msg" => "用户名已存在"));
    }else{
        $arr=array("msg"=>200,"data" => array("code" => "200","msg" => "用户名不存在"));
    }
    echo json_encode($arr);

?>