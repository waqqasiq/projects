<?php
if(isset($_SESSION['adminMail'])===TRUE){
    echo "<script>window.location='includes/admin-page.php'</script>";
}

include_once 'headerInside.php';


?>