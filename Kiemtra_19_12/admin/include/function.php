<?php  
    function getAllEmps(){
        global $conn;
        $sql="SELECT* FROM Cars";
        $result = mysqli_query($conn,$sql);
        $Cars= mysqli_fetch_all($result);
        return $Cars;
    }
    function deleteEmp($id){
        global $conn;
        $sql = "DELETE FROM Cars WHERE id =' $id '";
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
    }
    function getOneEmp($id){
		global $conn;
		$sql="SELECT * FROM Cars WHERE id='$id'";
		$result= mysqli_query($conn,$sql);
		$Cars= mysqli_fetch_assoc($result);
		return $Cars;
    }
    function updateEmp($id,$Bienso, $model, $nam, $kieu, $gia_ngay,$gia_thang,$trang_thai){
        global $conn;
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
    }
?>
