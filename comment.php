<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2018/2/13
 *Time:14:12
 */
include_once("connect.php");
$text = htmlspecialchars(trim($_POST['text']));
$time = htmlspecialchars(trim($_POST['time']));
echo $text . '====' . $time;
try {
    $sql = "insert into comments(content,time) values('$text','$time');";
    $query=mysqli_query($link,$sql);
    echo $query;
} catch (Exception $exception) {
    echo $exception->getMessage();
}
$data = array("code" => 1, "message"=>"success","text" => $text , "time" => $time);
echo json_encode($data);
