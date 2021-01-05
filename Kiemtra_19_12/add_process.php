<?php 

     require('admin/include/config.php');

    if (isset($_POST['add']) && $_POST['id'] != ""){

                                $id= $_POST['id'];
                                $Bienso= $_POST['Bienso'];
                                $model= $_POST['model'];
                                $nam= $_POST['nam'];
                                $kieu= $_POST['kieu'];
                                $gia_ngay= $_POST['gia_ngay'];
                                $gia_thang= $_POST['gia_thang'];
                                $trang_thai= $_POST['trang_thai'];
                                $sql= "INSERT INTO cars  VALUES ('$id','$Bienso','$model','$nam','$kieu','$gia_ngay','$gia_thang','$trang_thai')";
                                mysqli_set_charset($conn,'UTF8');       
                                if(mysqli_query($conn,$sql))
                                {
                               header("Location:index.php");
                            }   
                                echo "---------------------------Thêm thành công---------------------------";		
                           }    
                              
                        ?>