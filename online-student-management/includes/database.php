<?php
#$server='localhost';
#$user='demo5fli_iiesw';
#$password='WaqqasIqbal';
#$dbname='demo5fli_iiesw';

#$conn=mysqli_connect($server,$user,$password,$dbname);
#if(!$conn){
#	die("not connected".mysqli_connect_error());
#}

$server='localhost';
$user='root';
$password='';
$dbname='std_mng';
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn){
	die("not connected".mysqli_connect_error());
}

?>
