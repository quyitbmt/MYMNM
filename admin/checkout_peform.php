<?php 
    include("../config/dbconfig.php");
    $tenkhachhang = $_POST['tenkhachhang'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
    $idproduct = $_POST['idproduct'];
    $soluong = 1;
    $tongtien = $_POST['tongtien'];
    $hinhthuc = $_POST['payment'];
    if ($tenkhachhang==''||$email==''||$diachi==''||$phone==''||$idproduct==''||$soluong==''||$tongtien==''||$hinhthuc==''){
        echo '
        <script type="text/javascript">
            alert("Vui lòng điền đầy đủ thông tin!");
        </script>';
    }else{
        $sql ="INSERT into tbl_oder(tenkhachhang,email,diachi,phone,note,idproduct,soluong,tongtien,hinhthuc) value('$tenkhachhang','$email','$diachi','$phone','$note','$idproduct','$soluong','$tongtien','$hinhthuc')";
        // echo $sql;
        //Cho thực thi câu lệnh SQL trên
        $run = mysqli_query($conn, $sql);
        echo '
            <script type="text/javascript">
                alert("Mua hàng thành công");
                window.location.href="http://localhost:8080/MNM/webbangame/admin/?page=home";
            </script>';
    }
 ?>