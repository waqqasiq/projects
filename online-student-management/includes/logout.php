<?php 
session_start();
unset($_SESSION['uid']);
unset($_SESSION['uname']);
unset($_SESSION['umail']);

unset($_SESSION['adminid']);
unset($_SESSION['adminPass']);
unset($_SESSION['adminName']);


session_destroy();


clearstatcache();






echo "<script>window.location='../index.php'</script>";
?>
