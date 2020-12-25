<!doctype html>
<html lang="en">
  <head>    
    <title>View Record</title>
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
    <?php 
	    require('admin/include/config.php');
	    include('admin/include/function.php');

	    $id= $_GET['id']; //Lấy ID từ hàm getONeEmploy trong Functions.php
	    $id_nv= getOneEmp($id);
    ?>
        <div class="wrapper"> /
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>View Record</h1><hr/>
                        </div>
                        <div class="form-group">
                            <label>ID</label>
                            <p class="form-control-static"><input type="text" name="id" value="<?php echo $id_nv['id'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>Bien So</label>
                            <p class="form-control-static"><input type="text" name="name" value="<?php echo $id_nv['Bienso'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <p class="form-control-static"><input type="text" name="description" value="<?php echo $id_nv['model'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>nam</label>
                            <p class="form-control-static"><input type="text" name="salary" value="<?php echo $id_nv['nam'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>kieu xe</label>
                            <p class="form-control-static"><input type="text" name="gender" value="<?php echo $id_nv['kieu'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>Gia ngay</label>
                            <p class="form-control-static"><input type="text" name="birthday" value="<?php echo $id_nv['gia_ngay'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>Gia thang</label>
                            <p class="form-control-static"><input type="text" name="birthday" value="<?php echo $id_nv['gia_thang'] ?>"></p>
                        </div>
                        <div class="form-group">
                            <label>Trang Thai</label>
                            <p class="form-control-static"><input type="text" name="birthday" value="<?php echo $id_nv['trang_thai'] ?>"></p>
                        </div>
                        <p><a href="index.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>
            </div>
        </div>    
      
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>