<?php
include "../Model/pdo.php";
include "../Model/Mon-an.php";
include "../Model/Lop.php";
include "../Model/Can-bo.php";



include "header.php";
// include "View/login.php";
include "nav.php";
// include "menu.php";


if(isset($_GET['a'])){
    $a=$_GET['a'];
    switch ($a) {

        case 'danh-sach-loai-mon':
            $list_loai_mon=load_all_loai_mon();
            include "Mon-an/Loai-mon-danh-sach.php";
            break;
        case 'them-loai-mon':
            include "Mon-an/Loai-mon-them.php";
            break;  
        case 'insert-loai-mon':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $ten_loai_mon=$_POST['tenloaimon'];
                insert_loai_mon($ten_loai_mon);        
            }
            include "Mon-an/Loai-mon-them.php";
            break;
        case 'delete-loai-mon':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID'])>0){
                delete_loai_mon($_GET['LM_ID']);
            }
            $list_loai_mon=load_all_loai_mon();
            include "Mon-an/Loai-mon-danh-sach.php";
            break;   
        case 'danh-sach-mon-an':
            $list_mon=load_all_mon();
            include "Mon-an/Mon-an-danh-sach.php";
            break;
        case 'them-mon-an':
            $list_loai_mon=load_all_loai_mon();
            include "Mon-an/Mon-an-them.php";
            break;   
       
        case 'insert-mon-an':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $ten_mon=$_POST['tenmon'];
                $hinh_mon=$_FILES['hinh_mon']['name'];
                $mo_ta_mon=$_POST['motamon'];
                $LM_ID=$_POST['LM_ID'];
                $target_dir ="../Upload/";
                $target_file = $target_dir . basename($_FILES["hinh_mon"]["name"]);
                move_uploaded_file($_FILES["hinh_mon"]["tmp_name"], $target_file);
                insert_mon($ten_mon,$hinh_mon,$mo_ta_mon,$LM_ID);        
            }
            $list_loai_mon=load_all_loai_mon();
            include "Mon-an/Mon-an-them.php";
            break;  
        case 'them-thuc-don':
            $list_khoi=load_all_khoi();
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();
            include 'Mon-an/Thuc-don-them.php';
            break;
        case 'insert-thuc-don':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $khoi=$_POST['KHOI'];
                $buoi=$_POST['BUOI'];
                $thu=$_POST['THU'];
                $mon=$_POST['M_TEN'];
                insert_thuc_don($khoi,$buoi,$thu,$mon);        
            }


            
            $list_khoi=load_all_khoi();
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();
            include 'Mon-an/Thuc-don-them.php';
            break;   
        case 'them-can-bo':
            include "Can-bo/Them-can-bo.php";
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
            include  "Can-bo/Them-can-bo.php";
            break;   
        case 'danh-sach-can-bo':
            $list_can_bo=load_all_can_bo();
            include "Can-bo/Danh-sach-can-bo.php";
            break;
            

        case 'phan-cong':
            $list_nam_hoc=load_all_nam_hoc();
            $list_nhiem_vu=load_all_nhiem_vu();
            $list_can_bo=load_all_can_bo();
            $list_lop=load_all_lop();

            include "Can-bo/Phan-cong.php";
            break;
        case 'insert-phan-cong':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $NAMHOC=$_POST['NAMHOC'];
                $L_ID=$_POST['L_ID'];
                $NV_ID=$_POST['NV_ID'];
                $CB_ID=$_POST['CB_ID'];
                insert_phan_cong($NAMHOC,$L_ID,$NV_ID,$CB_ID);
            }            
            $list_nam_hoc=load_all_nam_hoc();
            $list_nhiem_vu=load_all_nhiem_vu();
            $list_can_bo=load_all_can_bo();
            $list_lop=load_all_lop();
            include "Can-bo/Phan-cong.php";
            break;
        case 'danh-sach-phan-cong':
            $list_phan_cong=load_all_phan_cong();
            include "Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'nhiem-vu':
            include "Can-bo/Nhiem-vu.php";
            break;
        case 'danh-sach-nhiem-vu':
            $list_nhiem_vu=load_all_nhiem_vu();
            include "Can-bo/Danh-sach-nhiem-vu.php";
            break;
        case 'insert-nhiem-vu':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $tennv=$_POST['tennv'];
                $motanv=$_POST['motanv'];
                insert_nhiem_vu($tennv,$motanv);
            }
            include "Can-bo/Nhiem-vu.php";
            break;

            
            
        case 'them-tre':
            include "Tre/Tre-them.php";
            break;
        case 'danh-sach-tre':
            include "Tre/Tre-danh-sach.php";
            break;

         case 'them-lop':
            $list_nam_hoc=load_all_nam_hoc();
            $list_khoi=load_all_khoi();
            include "Lop/Lop-them.php";
            break;
        case 'insert-lop':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $tenlop=$_POST['tenlop'];
                $NAMHOC=$_POST['NAMHOC'];
                $KHOI=$_POST['KHOI'];                
                insert_lop($tenlop,$KHOI,$NAMHOC);
            }
            $list_nam_hoc=load_all_nam_hoc();
            $list_khoi=load_all_khoi();
            include "Lop/Lop-them.php";
            break;
        case 'danh-sach-lop':
            $list_lop=load_all_lop();
            include "Lop/Lop-danh-sach.php";
            break;
        case 'them-khoi':
            include "Lop/Khoi-them.php";
            break;
        case 'insert-khoi':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $ten_khoi=$_POST['khoi'];
                insert_khoi($ten_khoi);        
            }
            include "Lop/Khoi-them.php";
            break;
        case 'danh-sach-khoi':
            $list_khoi=load_all_khoi();
            include "Lop/Khoi-danh-sach.php";
            break;
        case 'them-nam-hoc':
            include "Lop/Nam-hoc-them.php";
            break;
        case 'insert-nam-hoc':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $namhoc=$_POST['namhoc'];
                insert_nam_hoc($namhoc);        
                }
                include "Lop/Nam-hoc-them.php";
            break;
        case 'danh-sach-nam-hoc':
            $list_nam_hoc=load_all_nam_hoc();
            include "Lop/Nam-hoc-danh-sach.php";
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