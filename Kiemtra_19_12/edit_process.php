<?php 
    require('admin/include/config.php');
    include('admin/include/function.php');

        $id= $_GET['id'];
        $Bienso= $_GET['Bienso'];
        $model= $_GET['model'];
        $nam= $_GET['nam'];
        $kieu= $_GET['kieu'];
        $gia_ngay= $_GET['gia_ngay'];
        $gia_thang= $_GET['gia_thang'];
        $trang_thai= $_GET['trang_thai'];
        $sql = "UPDATE cars SET Bienso='$Bienso',model='$model', nam='$nam',kieu='$kieu',gia_ngay='$gia_ngay',gia_thang='$gia_thang',trang_thai='$trang_thai'
         WHERE id='$id'";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql))
        {
            header("Location:index.php");
           }
        else{
            echo"Khong doi duoc trang";
        }
?>