<?php
$now= date("Y-m-d H:i:s"); 
$batas=date("Y-m-d H:i:s", mktime(0, 0, 0, 10, 11, 2015));
// echo strtotime($now);
// echo "\n";
// echo strtotime($batas);
if($now>$batas){
	include "main.html";
	// echo "\n lewat";
}else{
include "lock.html";
	// echo "belum";
}