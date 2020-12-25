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
    function updateEmp($id, $Bienso, $model, $nam, $kieu, $gia_ngay,$gia_thang,$trang_thai){
        global $conn;
        $sql = "UPDATE cars SET id='$id', Bienso='$Bienso', nam='$nam',kieu='$kieu',giangay='$gia_ngay',giathang='$gia_thang',trangthai='$trang_thai,
         WHERE id='$id'";
        mysqli_query($conn, $sql);
    }
?>
