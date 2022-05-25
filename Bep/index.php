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
$list_thuc_don=load_all_thuc_don();
if(isset($_GET['c'])){
    $c=$_GET['c'];
    switch ($c) {
        case 'trang-chu':
            $list_thuc_don=load_all_thuc_don();
            include 'home.php';
            break;
        case 'dang-xuat':
            session_unset();
            header('location: ../index.php');
            ob_end_flush(); 
            break;
        case 'them-loai-mon':          
            include 'Them-loai-mon.php';
            break;
        case 'luu-loai-mon':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $ten_loai_mon=$_POST['tenloaimon'];
                insert_loai_mon($ten_loai_mon);        
            }
            $list_loai_mon=load_all_loai_mon();
            include 'Danh-sach-loai-mon.php';
            break;
        case 'xoa-loai-mon':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID'])>0){
                delete_loai_mon($_GET['LM_ID']);
            }
            $list_loai_mon=load_all_loai_mon();
            include 'Danh-sach-loai-mon.php';
            break;
        case 'danh-sach-loai-mon':
            $list_loai_mon=load_all_loai_mon();
            include 'Danh-sach-loai-mon.php';
            break; 
        case 'danh-sach-mon-theo-loai':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID']>0)){
                $LM_ID=$_GET['LM_ID'];              
                $list_mon=load_mon_thuoc_loai_mon($_GET['LM_ID']);
                $ten_loai_mon=load_ten_loai_mon($LM_ID);
            }
            include 'Danh-sach-mon-an.php';
            break;
        case 'danh-sach-mon-an':
            $list_mon=load_all_mon();
            include 'Danh-sach-mon-an.php';
            break;
        case 'them-mon-an':
            $list_loai_mon=load_all_loai_mon();
            include 'Them-mon-an.php';
            break;
        case 'luu-mon-an':
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
            $list_mon=load_all_mon();
            include 'Danh-sach-mon-an.php';
        case 'xoa-mon-an':
            if(isset($_GET['M_ID'])&&($_GET['M_ID'])>0){
            delete_mon_an($_GET['M_ID']);
            }
            $list_mon=load_all_mon();
            include 'Danh-sach-mon-an.php';
            break;
        case 'them-thuc-don':
           
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();
            include 'Them-thuc-don.php';
            break;
        case 'them-thuc-don-loi':         
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();
            include 'Them-thuc-don-loi.php';
            break;
        case 'danh-sach-thuc-don':
            $list_thuc_don=load_all_thuc_don_bep();
            include 'Danh-sach-thuc-don.php';
            break;

            case 'xoa-thuc-don-thu-2':
                xoa_thuc_don_thu2();
                $list_thuc_don=load_all_thuc_don_bep();
            include 'Danh-sach-thuc-don.php';
                break;
            case 'xoa-thuc-don-thu-3':
                xoa_thuc_don_thu3();
                $list_thuc_don=load_all_thuc_don_bep();
                include 'Danh-sach-thuc-don.php';
                break;
            case 'xoa-thuc-don-thu-4':
                xoa_thuc_don_thu4();
                $list_thuc_don=load_all_thuc_don_bep();
            include 'Danh-sach-thuc-don.php';
                break;
            case 'xoa-thuc-don-thu-5':
                xoa_thuc_don_thu5();
                $list_thuc_don=load_all_thuc_don_bep();
            include 'Danh-sach-thuc-don.php';
                break;
            case 'xoa-thuc-don-thu-6':
                xoa_thuc_don_thu6();
                $list_thuc_don=load_all_thuc_don_bep();
            include 'Danh-sach-thuc-don.php';
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