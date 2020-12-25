<?php 
    require("admin/include/config.php");
    include("admin/include/function.php");
    $id= $_GET['id'];
    $id_nv = getOneEmp($id);

    if(isset($_POST['update'])){
        $id= $_POST['id'];
        $Bienso= $_POST['Bienso'];
        $model= $_POST['model'];
        $nam= $_POST['nam'];
        $kieu= $_POST['kieu'];
        $gia_ngay= $_POST['gia_ngay'];
        $gia_thang= $_POST['gia_thang'];
        $trang_thai= $_POST['trang_thai'];
        updateEmp($id,$Bienso,$model,$nam,$kieu,$gia_ngay,$gia_thang,$trang_thai);
        echo "---> Sửa thành công :))";
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
        .wrapper {
            width:500px;
            margin:0 auto;
        }
        input {
            border:none;
        }
        label {
            font-weight:bold;
        }
  </style>
  </head>
  <body>
  <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>Update Record</h1><hr/>
                        </div>
                        <form action="" method="post">                       
                            <div class="form-group">
                                <label>ID</label>
                                <p class="form-control-static"><input type="text" name="id" value="<?php echo $id_nv['id'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>BienSo</label>
                                <p class="form-control-static"><input type="text" name="Bienso" value="<?php echo $id_nv['Bienso'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>model</label>
                                <p class="form-control-static"><input type="text" name="model" value="<?php echo $id_nv['model'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>nam</label>
                                <p class="form-control-static"><input type="text" name="nam" value="<?php echo $id_nv['nam'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>kieu</label>
                                <p class="form-control-static"><input type="text" name="kieu" value="<?php echo $id_nv['kieu'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>gia_ngay</label>
                                <p class="form-control-static"><input type="text" name="gia_ngay" value="<?php echo $id_nv['gia_ngay'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>gia_thang</label>
                                <p class="form-control-static"><input type="text" name="gia_thang" value="<?php echo $id_nv['gia_thang'] ?>"></p>
                            </div>
                            <div class="form-group">
                                <label>trang_thai</label>
                                <p class="form-control-static"><input type="text" name="trang_thai" value="<?php echo $id_nv['trang_thai'] ?>"></p>
                            </div>
                            <input type="submit" name="update" class="btn btn-primary" value="Save">
                            <?php  header('http://localhost/kiemtra_19_12/index.php');?>
                            <a href="index.php" class="btn btn-default">Cancel</a>    
                    
                        </form>                       
                    </div>
                </div>
            </div>
        </div>     
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>