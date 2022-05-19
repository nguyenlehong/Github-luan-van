<?php
ob_start();
session_start();
error_reporting(0);
include "../Model/pdo.php";
include "../Model/Mon-an.php";
include "../Model/Lop.php";
include "../Model/Can-bo.php";
include "../Model/Tre.php";

include "header.php";

include "nav.php";
include "menu.php";

if(isset($_GET['b'])){
    $b=$_GET['b'];
    switch ($b) {
  
        case 'dang-xuat':
            session_unset();
            header('location: ../index.php');
            ob_end_flush(); 
            break;
        case 'them-can-bo':
            include "Can-bo/Them-can-bo.php";
            break; 
        case 'danh-sach-can-bo':
            $list_can_bo=load_all_can_bo();
            include "Can-bo/Danh-sach-can-bo.php";
            break;
        case 'insert-can-bo':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $hoten=$_POST['hoten'];
                $ngaysinh=$_POST['ngaysinh'];
                $phai=$_POST['phai'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                insert_can_bo($hoten,$ngaysinh,$phai,$sdt,$email,$diachi);
            }   
            $list_can_bo=load_all_can_bo();
            include "Can-bo/Danh-sach-can-bo.php";
            break;
        case 'update-can-bo':
            if(isset($_GET['CB_ID'])&&($_GET['CB_ID'])>0){
                $canbo=load_1_can_bo($_GET['CB_ID']);
              }
            include "Can-bo/Cap-nhat-can-bo.php";
            break;
        case 'cap-nhat-thong-tin-can-bo':
            if(isset($_POST['luu'])&&($_POST['luu'])){             
                $id = $_POST['id'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                cap_nhat_thong_tin_can_bo($id,$sdt,$email,$diachi);
                $thongbao="Cập nhật thông tin thành công";
            }   
            $canbo=load_1_can_bo($id);
            include "Can-bo/Cap-nhat-can-bo.php";
            break;
        case 'delete-can-bo':
            if(isset($_GET['CB_ID'])&&($_GET['CB_ID'])>0){
                delete_can_bo($_GET['CB_ID']);
            }
            $list_can_bo=load_all_can_bo();
            include "Can-bo/Danh-sach-can-bo.php";
            break;
        case 'them-nam-hoc':
            include "Lop/Them-nam-hoc.php";
            break;
        case 'danh-sach-nam-hoc':
            $list_nam_hoc=load_all_nam_hoc();
            include "Lop/Danh-sach-nam-hoc.php";
            break;
        case 'insert-nam-hoc':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $namhoc=$_POST['namhoc'];
                $ten=$_POST['ten'];
                $bd1=$_POST['bdhk1'];
                $kt1=$_POST['kthk1'];
                $bd2=$_POST['bdhk2'];
                $kt2=$_POST['kthk2'];
                insert_nam_hoc($namhoc,$ten,$bd1,$kt1,$bd2,$kt2);        
                }
            $list_nam_hoc=load_all_nam_hoc();
            include "Lop/Danh-sach-nam-hoc.php";
            break; 
        case 'update-nam-hoc':
            if(isset($_GET['NAMHOC'])&&($_GET['NAMHOC']!='')){
                $NAMHOC=$_GET['NAMHOC'];   
                $list_1_nam=load_1_nam_hien_an($NAMHOC);
            }
                include "Lop/Cap-nhat-nam-hoc.php";
                break;
        case 'cap-nhat-trang-thai-nam-hoc':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $namhoc=$_POST['ten'];
                $tt=$_POST['trangthai'];
                $bd1=$_POST['bdhk1'];
                $kt1=$_POST['kthk1'];
                $bd2=$_POST['bdhk2'];
                $kt2=$_POST['kthk2'];    
                update_nam($namhoc,$tt,$bd1,$kt1,$bd2,$kt2);        
            }
            $list_nam_hoc=load_all_nam_hoc();
            include "Lop/Danh-sach-nam-hoc.php";
            break;
        case 'them-lop':
            $list_nam_hoc=load_all_nam_hoc_hoat_dong();
            $list_khoi=load_all_khoi();
            include "Lop/Them-lop.php";
            break;
        case 'danh-sach-lop':
            $list_lop=load_all_lop_hoat_dong();
            include "Lop/Danh-sach-lop.php";
            break;
        case 'insert-lop':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $tenlop=$_POST['tenlop'];
                $NAMHOC=$_POST['NAMHOC'];
                $KHOI=$_POST['KHOI'];                
                insert_lop($tenlop,$KHOI,$NAMHOC);
            }
            $list_lop=load_all_lop_hoat_dong();
            include "Lop/Danh-sach-lop.php";
            break;
        case 'danh-sach-khoi':
            $list_khoi=load_all_khoi();
            include "Lop/Danh-sach-khoi.php";
            break;   
        case 'loc-lop-theo-khoi':
            if(isset($_GET['KHOI'])&&($_GET['KHOI']!='')){
                $KHOI=$_GET['KHOI'];  
                $list_lop=load_lop_thuoc_khoi_hoat_dong($_GET['KHOI']);
            }
            include "Lop/Danh-sach-lop-theo-khoi.php";
            break;
        case 'them-khoan-thu':
            include "Tre/Them-khoan-thu.php";
            break; 
        case 'danh-sach-khoan-thu':
            $list_khoan_thu=load_all_khoan_thu();
            include "Tre/Danh-sach-khoan-thu.php";  
            break;
        case 'insert-khoan-thu':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $noidung=$_POST['noidung'];
                $ghichu=$_POST['ghichu'];
                insert_khoan_thu($noidung,$ghichu);               
            } 
            $list_khoan_thu=load_all_khoan_thu();
            include "Tre/Danh-sach-khoan-thu.php";
            break;  
        case 'xoa-khoan-thu':
            if(isset($_GET['KT_ID'])&&($_GET['KT_ID'])>0){
                $KT_ID=$_GET['KT_ID'];
                delete_khoan_thu($KT_ID);
            } 
            $list_khoan_thu=load_all_khoan_thu();
            include "Tre/Danh-sach-khoan-thu.php";
            break;
                     
        default:
            include "home.php";
             break;
     }
 }else{
     include "home.php";
 }
 include "footer.php";
 ?>