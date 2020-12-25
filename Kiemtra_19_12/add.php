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
                                mysqli_query($conn,$sql);
                                echo "---------------------------Thêm thành công---------------------------";		
                           }                            
                        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
        .control-label:before{
            color: red;
            content: "*";
            position: absolute;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   <div class="page-header">
                        <h2>Tạo hợp đồng mới</h2>
                   </div>
                   <p>Vui lòng điền đầy đủ thông tin vào bảng sau</p> 
                    <form action="" method="post">
                        <div class="form-group required control-label">
                            <label for="ID" style="font-weight:bold;">ID</label>
                            <input type="text" name="id" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="Bienso" style="font-weight:bold;">Biển Số</label>
                            <textarea type="text" name="Bienso" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="model" style="font-weight:bold;">model</label>
                            <input type="text" name="model" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="nam" style="font-weight:bold;">Năm</label>
                            <input type="text" name="nam" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="kieu" style="font-weight:bold;">Kiểu xe</label>
                            <input type="text" name="kieu" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="gia_ngay" style="font-weight:bold;">Giá theo ngày</label>
                            <input type="text" name="gia_ngay" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="gia_thang" style="font-weight:bold;">Giá theo tháng</label>
                            <input type="text" name="gia_thang" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="trang_thai" style="font-weight:bold;">Trạng Thái</label>
                            <input type="text" name="trang_thai" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        
                       <input type="submit" name="add" class="btn btn-primary" value="Save" >
                      
                       <?php  header('http://localhost/kiemtra_19_12/index.php');?>
                        <a href="index.php" class="btn btn-default">Cancel</a></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>