<?php 
var_dump($_POST); //bắt tất cả dữ liệu trừ type="file"
var_dump($_FILES); //bắt dữ liệu của type="file"
//exit; // ko chạy code phía dưới
$filename = $_FILES["avatar"]["name"];//a.png
$destination = "images/" . $filename;//images/a.png
//move_uploaded_file(from, to)
move_uploaded_file($_FILES["avatar"]["tmp_name"], $destination);
// move_uploaded_file("C:\xampp\tmp\php66E4.tmp","images/a.png");

 ?>