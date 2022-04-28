<?php
session_start();
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
            $list_lop=load_all_lop();
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
        break;
        default:
            # code...
            break;
    }
}

include "View/footer.php";
?>