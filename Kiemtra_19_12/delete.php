<?php
    $emp_id = $_GET['id'];
    require("admin/include/config.php");
    include("admin/include/function.php");
    if(deleteEmp($emp_id)){
        header("Location:index.php");
        exit();
    }else{
        echo "something wrong!";
    }
    mysqli_close($conn);
?>
