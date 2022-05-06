<?php
session_start();
ob_start();
include "Model/pdo.php";
include "Model/Tai-khoan.php";
include "Model/Mon-an.php";
include "Model/Lop.php";
include "Model/Can-bo.php";
include "Model/Tre.php";

include "View/header.php";
include "View/nav.php";
include "View/menu.php";


if(isset($_GET['b'])){
    $b=$_GET['b'];
    switch ($b) {
        case 'danh-sach-can-bo':
            $list_can_bo=load_all_can_bo();
            include "View/Can-bo/Danh-sach-can-bo.php";
            break;         
        case 'danh-sach-nhiem-vu':
            $list_nhiem_vu=load_all_nhiem_vu();
            include "View/Can-bo/Danh-sach-nhiem-vu.php";
            break;
        case 'danh-sach-phan-cong':
            $list_phan_cong=load_all_phan_cong();
            include "View/Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'danh-sach-khoi':
            $list_khoi=load_all_khoi();
            include "View/Lop/Khoi-danh-sach.php";
            break;
        case 'loc-lop-theo-khoi':
            if(isset($_GET['KHOI'])&&($_GET['KHOI']!='')){
                $KHOI=$_GET['KHOI'];
               
                $list_lop=load_lop_thuoc_khoi($_GET['KHOI']);
            }
            include "View/Lop/Lop-danh-sach-theo-khoi.php";
            break;
        case 'loc-tre-theo-lop':
            if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                $L_ID=$_GET['L_ID'];            
                $list_tre=load_tre_thuoc_lop($L_ID);
                $ten_lop=load_ten_lop($L_ID);
            }
            include "View/Lop/Tre-danh-sach-theo-lop.php";
            break;
        case 'danh-sach-lop':
            $list_khoi=load_all_khoi();
            $list_lop=load_all_lop();
            $list_nam_hoc=load_all_nam_hoc();
            include "View/Lop/Lop-danh-sach.php";
            break;
        case 'danh-sach-khoan-thu':
            $list_khoan_thu=load_all_khoan_thu();
            include "View/Lop/Khoan-thu-danh-sach.php";   
            break;
        
        case 'danh-sach-loai-mon':
            $list_loai_mon=load_all_loai_mon();
            include "View/Mon-an/Loai-mon-danh-sach.php";
            break;
        case 'danh-sach-mon-an':
            $list_mon=load_all_mon();
            include "View/Mon-an/Mon-an-danh-sach.php";
            break;
        case 'danh-sach-thuc-don':
            $list_thuc_don=load_all_thuc_don();
            include 'View/Mon-an/Thuc-don-danh-sach.php';
            break;
        case 'dang-xuat':
            session_unset();
            header('location: index.php');
            ob_end_flush();
        break;
        case 'doi-mat-khau':
            
            include "View/login.php";
            break;
        case 'cap-nhat-mat-khau':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $mk=$_POST['mk'];
                $mkmoi=$_POST['mkmoi'];
                $mkmoicheck=$_POST['mkmoicheck'];                
                $id=$_POST['CB_ID'];
                $CB_MATKHAU=$_POST['CB_MATKHAU'];

                if($mk = $CB_MATKHAU){
                    if($mkmoi == $mkmoicheck){
                    doi_mat_khau($id,$mkmoi);
                  
                    $thongbao="Đổi mật khẩu thành công! đăng xuất sau 3s";
                   
                    session_unset();
                    header('refresh:5; url=index.php');	
                   
                         }else{
                            $thongbaoloi2="Nhập lại mật khẩu mới!";
                            
                         }
                    
                    }else{
                        $thongbaoloi="Mật khẩu cũ không đúng!";
                        }
                }
                
            
            include "View/login.php";
            break;
        case 'ho-so':
            include "View/home.php";
            break;
        case 'nhap-chi-so-tre': 
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);      
            include "View/Lop/Tre-chi-so-theo-lop.php";
            break;
        case 'nhap-chi-so-tre2': 
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);
            include "View/Lop/Tre-chi-so-theo-lop2.php";
            break;
        case 'nhap-chi-so-tre3': 
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);     
            include "View/Lop/Tre-chi-so-theo-lop3.php";
            break;
        default:
            include "home.php";
            break;
    }
}else{
include "View/home.php";

}

include "View/footer.php";
?>