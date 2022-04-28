<?php
session_start();
include "View/header.php";
include "Model/pdo.php";
include "Model/Tai-khoan.php";		

            
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $id=$_POST['ID'];
                $matkhau=$_POST['Matkhau'];
                $kiemtradangnhap=kiem_tra_dang_nhap($id,$matkhau);    
                    if(is_array($kiemtradangnhap)){
                        $_SESSION['user']=$kiemtradangnhap;
                         header('location: Xu-ly.php');	  
                        

                    }else{
                        $thongbaoo="Tài khoản hoặc mật khẩu không đúng";
                        include "index.php";
                    }                                 
                }   
                
            
          

include "View/footer.php";
?>