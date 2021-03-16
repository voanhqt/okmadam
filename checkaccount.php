<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$username = $_POST["username"];
//echo "ok".$username;
if (strpos($username, " ") === false){
    echo $username;
}
else{
    echo 'bạn đã nhập ký tự trắng';
}
?>