<?php
session_start();
include "View/header.php";
include "Model/pdo.php";
include "Model/Tai-khoan.php";		

            
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $id=$_POST['ID'];
                $matkhau=$_POST['Matkhau'];
                $kiemtradangnhap=kiem_tra_dang_nhap($id,$matkhau);    
                $kiemtradangnhapadmin=kiem_tra_dang_nhap_admin($id,$matkhau);
                $kiemtradangnhapqtv=kiem_tra_dang_nhap_qtv($id,$matkhau);  

                    if(is_array($kiemtradangnhap)){
                        $_SESSION['user']=$kiemtradangnhap;
                         header('location: Xu-ly.php');	  
                        
                    }else if(is_array( $kiemtradangnhapadmin)){
                            $_SESSION['admin']= $kiemtradangnhapadmin;
                             header('location: Admin/index.php');	
                        
                    }else if(is_array( $kiemtradangnhapqtv)){
                        $_SESSION['qtv']= $kiemtradangnhapqtv;
                         header('location: QTV/index.php');	
                    
                }else{
                        $thongbaoo="Tài khoản hoặc mật khẩu không đúng";
                        include "index.php";
                    }                                 
                }   
                
            
          

include "View/footer.php";
?>