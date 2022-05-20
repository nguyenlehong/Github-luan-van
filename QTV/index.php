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
if(isset($_GET['b'])){
    $b=$_GET['b'];
    switch ($b) {
        case 'trang-chu':
            $list_thuc_don=load_all_thuc_don();
            include 'home.php';
            break;
        case 'dang-xuat':
            session_unset();
            header('location: ../index.php');
            ob_end_flush(); 
            break;
        case 'danh-sach-nhiem-vu':
            $list_nhiem_vu=load_all_nhiem_vu();
            include 'Can-bo/Danh-sach-nhiem-vu.php';
            break;
        case 'danh-sach-phan-cong':
            $list_phan_cong=load_all_phan_cong();
            include 'Can-bo/Danh-sach-phan-cong.php';
            break;
        case 'danh-sach-phan-cong-hien-tai':
            $list_phan_cong=load_all_phan_cong_hien_tai();
            include 'Can-bo/Danh-sach-phan-cong-hien-tai.php';
            break;
        case 'tim-can-bo-trong-phan-cong':
            if(isset($_POST['tim'])&&($_POST['tim'])){
                $id=$_POST['ten'];
                
                }else{
                    $id='';         
                }
            $list_phan_cong=load_all_phan_cong_tim($id);   
            include "Can-bo/Danh-sach-phan-cong.php";
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
        case 'danh-sach-muc-thu-khoi-mam':
            $list_muc_thu_mam= load_muc_thu_khoi_mam();
            include 'Tre/Danh-sach-muc-thu-khoi-mam.php';
            break;
        case 'danh-sach-muc-thu-khoi-choi':
            $list_muc_thu_choi= load_muc_thu_khoi_choi();
            include "Tre/Danh-sach-muc-thu-khoi-choi.php";    
            break;
        case 'danh-sach-muc-thu-khoi-la':
            $list_muc_thu_la= load_muc_thu_khoi_la();
            include "Tre/Danh-sach-muc-thu-khoi-la.php";    
            break;  
        case 'danh-sach-muc-thu-tat-ca':
            $list_nam_hoc=load_all_nam_hoc();
            include "Tre/Danh-sach-muc-thu-tat-ca.php";    
            break;
        case 'danh-sach-muc-thu-theo-nam':
            $list_nam_hoc=load_all_nam_hoc();
            if(isset($_POST['tim'])&&($_POST['tim'])){
                $NAMHOC=$_POST['NAMHOC'];
            }else{
                $NAMHOC='';         
                } 
            $list_muc_thu=load_all_muc_thu_theo_nam($NAMHOC); 
            include "Tre/Danh-sach-muc-thu-tat-ca.php";    
            break;
        case 'danh-sach-tre':
            $list_all_tre=load_all_tre_dang_hoat_dong();
            include 'Tre/Danh-sach-tre.php';
            break;
        case 'danh-sach-loai-mon':
            $list_loai_mon=load_all_loai_mon();
            include 'Mon/Danh-sach-loai-mon.php';
            break;
        case 'them-loai-mon':
            include 'Mon/Them-loai-mon.php';
            break;    
        case 'luu-loai-mon':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $ten_loai_mon=$_POST['tenloaimon'];
                insert_loai_mon($ten_loai_mon);        
            }
            $list_loai_mon=load_all_loai_mon();
            include 'Mon/Danh-sach-loai-mon.php';
            break;
        case 'xoa-loai-mon':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID'])>0){
                delete_loai_mon($_GET['LM_ID']);
            }
            $list_loai_mon=load_all_loai_mon();
            include 'Mon/Danh-sach-loai-mon.php';
            break;
        case 'danh-sach-mon-an':
            $list_mon=load_all_mon();
            include "Mon/Danh-sach-mon-an.php";
            break;
        case 'them-mon-an':
            $list_loai_mon=load_all_loai_mon();
            include 'Mon/Them-mon-an.php';
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
            include "Mon/Danh-sach-mon-an.php";
        case 'xoa-mon-an':
            if(isset($_GET['M_ID'])&&($_GET['M_ID'])>0){
                delete_mon_an($_GET['M_ID']);
            }
            $list_mon=load_all_mon();
            include "Mon/Danh-sach-mon-an.php";
            break;
        case 'danh-sach-mon-theo-loai':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID']>0)){
                $LM_ID=$_GET['LM_ID'];              
                $list_mon=load_mon_thuoc_loai_mon($_GET['LM_ID']);
                $ten_loai_mon=load_ten_loai_mon($LM_ID);
            }
            include "Mon/Danh-sach-mon-an.php";
            break;
        case 'thuc-don':
            $list_thuc_don=load_all_thuc_don();
            include 'Mon/Thuc-don.php';
            break;
        default:
            $list_thuc_don=load_all_thuc_don();
            include "home.php";
             break;
     }
 }else{
     include "home.php";
 }
 include "footer.php";
 ?>