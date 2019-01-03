<?php
session_start();
if(isset($_SESSION['uid'])==True){
        echo "<script>window.location='dashtry.php?stdid=".$_SESSION['uid']."'</script>";
        exit();
    }
    
    
include 'database.php';
include 'account-list2.php';
?>
