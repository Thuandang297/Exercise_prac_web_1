<!doctype html>
<html lang="en">
  <head>
    <title>index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>Dịch vụ thuê xe du lịch</h1>
    <a href="add.php" class="float-right btn btn-success"><i class="fas fa-user"></i>Thuê xe</a><br/>
    <hr/>
      <table class="table table-striped table-bordered">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Biển Số</th>
                  <th>model</th>
                  <th>Năm sản xuất</th>
                  <th>Kiểu</th>
                  <th>Giá thuê theo ngày</th>
                  <th>Giá theo tháng</th>
                  <th>Trạng Thái</th>
                  <th>Tùy chọn</th>
                  
              </tr>
          </thead>
          <tbody>
            <?php
             require('admin/include/config.php');
             include('admin/include/function.php');
             $Cars = getAllEmps();
             foreach($Cars as $row){
         ?>
                   <tr>
                  <td scope="row"><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[4];?></td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[5];?></td>
                  <td><?php echo $row[6];?></td>
                  <td><?php echo $row[7];?></td>
               
                
                  <td>
                    <a href="view.php?id=<?php echo $row[0];?>"><i class="far fa-eye"></i></a>
                    <a href="edit.php?id=<?php echo $row[0];?>"><i class="fas fa-edit"></i></a>
                    <a href="" data-toggle="modal" data-target="#modal"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                  <!-- Tạo thanh thông báo khi xóa-->
                  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">localhost says</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc sẽ xóa ?
                                </div>
                                <div class="modal-footer">
                                    <a name="" id="" class="btn btn-primary" href="delete.php?id=<?php echo $row[0] ?>" role="button">OK</a>
                                    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>  
              </tr>
            <?php
                }
            ?>
          </tbody>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
