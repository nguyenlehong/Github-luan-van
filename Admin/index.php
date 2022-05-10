<?php
ob_start();
session_start();

include "../Model/pdo.php";
include "../Model/Mon-an.php";
include "../Model/Lop.php";
include "../Model/Can-bo.php";
include "../Model/Tre.php";

include "header.php";
// include "View/login.php";
include "nav.php";
include "menu.php";

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
            $list_loai_mon=load_all_loai_mon();
            include "Mon-an/Loai-mon-danh-sach.php";
            break;
        case 'delete-loai-mon':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID'])>0){
                delete_loai_mon($_GET['LM_ID']);
            }
            $list_loai_mon=load_all_loai_mon();
            include "Mon-an/Loai-mon-danh-sach.php";
            break;  
        case 'list-mon-theo-loai':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID']>0)){
                $LM_ID=$_GET['LM_ID'];              
                $list_mon=load_mon_thuoc_loai_mon($_GET['LM_ID']);
                $ten_loai_mon=load_ten_loai_mon($LM_ID);
            }
            include 'Mon-an/Mon-an-danh-sach-theo-loai.php';
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
            $list_mon=load_all_mon();
            include "Mon-an/Mon-an-danh-sach.php";
            break;
        case 'delete-mon-an':
            if(isset($_GET['M_ID'])&&($_GET['M_ID'])>0){
                delete_mon_an($_GET['M_ID']);
            }
            $list_mon=load_all_mon();
            include "Mon-an/Mon-an-danh-sach.php";
            
            break;  
        case 'them-thuc-don':
            $list_khoi=load_all_khoi();
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();
            include 'Mon-an/Thuc-don-them.php';
            break;
        case 'them-thuc-don-v2':       
            $list_khoi=load_all_khoi();
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();

            include 'Mon-an/Thuc-don-them-v2.php';
            break;
        case 'insert-thuc-don':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $khoi=$_POST['KHOI'];
                $buoi=$_POST['BUOI'];
                $thu=$_POST['THU'];
                $mon=implode(', ' ,$_POST['M_TEN']);
                insert_thuc_don($khoi,$buoi,$thu,$mon);        
            }          
            $list_khoi=load_all_khoi();
            $list_buoi=load_all_buoi();
            $list_thu=load_all_thu();
            $list_mon=load_all_mon();
            $list_thuc_don=load_all_thuc_don();
            include 'Mon-an/Thuc-don-danh-sach.php';
            break;   
        case 'danh-sach-thuc-don':
            $list_thuc_don=load_all_thuc_don();
            include 'Mon-an/Thuc-don-danh-sach.php';
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
            $list_can_bo=load_all_can_bo();
            include "Can-bo/Danh-sach-can-bo.php";
            break;   
        case 'danh-sach-can-bo':
            $list_can_bo=load_all_can_bo();
            include "Can-bo/Danh-sach-can-bo.php";
            break;
        case 'delete-can-bo':
            if(isset($_GET['CB_ID'])&&($_GET['CB_ID'])>0){
                delete_can_bo($_GET['CB_ID']);
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
        case 'cap-nhat-thong-tincb':
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
        case 'cap-nhat-thong-tin-tre':
            if(isset($_GET['T_ID'])&&($_GET['T_ID'])>0){
                  $tre=cap_nhat_1_tre($_GET['T_ID']);
            }
                include "Tre/Cap-nhat-thong-tin-tre.php";
                break;
        case 'cap-nhat-thong-chi-tiet-tin-tree':
            if(isset($_POST['luu'])&&($_POST['luu'])){  
                $id=$_POST['id'];    
                $ten=$_POST['ten'];
                $ngaysinh=$_POST['ngaysinh'];
                $phai=$_POST['phai'];
                $diachi=$_POST['diachi'];
                $hotenme=$_POST['hotenme'];
                $sdtme=$_POST['sdtme'];
                $nnme=$_POST['nnme'];
                $hotencha=$_POST['hotencha'];
                $sdtcha=$_POST['sdtcha'];
                $nncha=$_POST['nncha'];
                cap_nhat_thong_tin_tre($id,$ten,$ngaysinh,$phai,$diachi,$hotencha,$sdtcha,$nncha,$hotenme,$sdtme,$nnme);  
                $thongbao="Cập nhật thông tin thành công";          
            }  
            $tre=cap_nhat_1_tre($id);
            include "Tre/Cap-nhat-thong-tin-tre.php";       
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
            $list_phan_cong=load_all_phan_cong();
            include "Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'danh-sach-phan-cong':
            $list_phan_cong=load_all_phan_cong();
            include "Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'xoa-phan-cong':
            if(isset($_GET['PC_ID'])&&($_GET['PC_ID'])>0){
                delete_phan_cong($_GET['PC_ID']);
            }
            
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
            $list_nhiem_vu=load_all_nhiem_vu();
            include "Can-bo/Danh-sach-nhiem-vu.php";
            break;
        case 'xoa-nhiem-vu':
            if(isset($_GET['NV_ID'])&&($_GET['NV_ID'])>0){
                $NV_ID=$_GET['NV_ID'];
                delete_nhiem_vu($NV_ID);
            }  
            $list_nhiem_vu=load_all_nhiem_vu();
            include "Can-bo/Danh-sach-nhiem-vu.php";    
            break;
        case 'them-khoan-thu':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $noidung=$_POST['noidung'];
                $ghichu=$_POST['ghichu'];
                insert_khoan_thu($noidung,$ghichu);               
            }       
             include "Lop/Khoan-thu-them.php";    
            break;
        case 'danh-sach-khoan-thu':
            $list_khoan_thu=load_all_khoan_thu();
            include "Lop/Khoan-thu-danh-sach.php";   
            break;
        case 'them-tien-khoan-thu':
            $list_nam_hoc=load_all_nam_hoc();
            $list_khoi=load_all_khoi();
            $list_khoan_thu=load_all_khoan_thu();     
            include "Lop/Muc-thu-them.php"; 
            break;
        case 'them-tre':
            $list_lop=load_all_lop();
            include "Tre/Tre-them.php";
            break;
        case 'xoa-tre':
            if(isset($_GET['T_ID'])&&($_GET['T_ID'])>0){
                delete_tre($_GET['T_ID']);
            }
            $list_all_tre=load_all_tre();
            include "Tre/Tre-danh-sach.php";
            break;
        case 'insert-tre':
            if(isset($_POST['luu'])&&($_POST['luu'])){       
                $ten=$_POST['ten'];
                $ngaysinh=$_POST['ngaysinh'];
                $phai=$_POST['phai'];
                $diachi=$_POST['diachi'];
                $hotenme=$_POST['hotenme'];
                $sdtme=$_POST['sdtme'];
                $nnme=$_POST['nnme'];
                $hotencha=$_POST['hotencha'];
                $sdtcha=$_POST['sdtcha'];
                $nncha=$_POST['nncha'];
                insert_tre($ten,$ngaysinh,$phai,$diachi,$hotencha,$sdtcha,$nncha,$hotenme,$sdtme,$nnme);            
            }  
            $KHOI='';
            $list_khoi=load_all_khoi();           
            $list_lop=load_lop_thuoc_khoi($KHOI);
            $list_tre=load_1_tre();
            $list_lop=load_all_lop();
            include "Tre/Tre-chon-lop.php";
            break;
        // case 'chon-lop':
        //     if(isset($_POST['loc-lop'])&&($_POST['loc-lop'])){
        //         $KHOI=$_POST['KHOI'];
        //     }else{
        //     $KHOI='';
        //     }      
        //     $list_khoi=load_all_khoi();
            
        //     $list_lop=load_lop_thuoc_khoi($KHOI);
        //     $list_tre=load_1_tre();

        //     include "Tre/Tre-chon-lop.php";
        //     break;
        case 'chon-lop':
            if(isset($_POST['loc-lop'])&&($_POST['loc-lop'])){
                $NAMHOC=$_POST['NAMHOC'];
            }else{
            $NAMHOC='';
            }      
            $list_nam_hoc=load_all_nam_hoc();
            
            $list_nam_hoc2=load_lop_thuoc_khoi($NAMHOC);
// v
//             $list_khoi=load_all_khoi();
            
//             $list_lop=load_lop_thuoc_khoi($KHOI);
//             $list_tre=load_1_tre();

            include "Tre/Tre-chon-lop.php";
            break;
        case 'insert-tre-chon-lop':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $idlop=$_POST['L_ID'];
                $idtre=$_POST['T_ID'];                
                insert_tre_chon_lop($idlop,$idtre);
                insert_tre_chi_so($idlop,$idtre);
                insert_tre_chi_so2($idlop,$idtre);
                insert_tre_chi_so3($idlop,$idtre);
            }
            $list_all_tre=load_all_tre();

            include "Tre/Tre-danh-sach.php";
            break;
        case 'len-lop-tre':
            if(isset($_GET['T_ID'])&&($_GET['T_ID']>0)){
                $T_ID=$_GET['T_ID'];
                $list_tre=load_1_tre_len_lop($T_ID);
            }
            if(isset($_POST['loc-lop'])&&($_POST['loc-lop'])){
                $NAMHOC=$_POST['NAMHOC'];
            }else{
            $NAMHOC='';
            }
            $list_lop=load_all_lop();

            $list_nam_hoc2=load_lop_thuoc_khoi($NAMHOC);
            $list_nam_hoc=load_all_nam_hoc();
            include "Tre/Tre-chon-lop.php";
            break;
        case 'loc-tre-theo-lop':
            if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                $L_ID=$_GET['L_ID'];            
                $list_tre=load_tre_thuoc_lop($L_ID);
                $ten_lop=load_ten_lop($L_ID);
            }
            include "Tre/Tre-danh-sach-theo-lop.php";
            break;
        case 'danh-sach-tre':
            $list_all_tre=load_all_tre();
            include "Tre/Tre-danh-sach.php";
            break;
        case 'cap-nhat-chi-so-tre':
            if(isset($_GET['T_ID'])&&($_GET['T_ID']>0)){
            $chi_tiet=load_1_tre_chi_so($_GET['T_ID']);
            }            
            include "Tre/Tre-chi-so.php";
            break;
         case 'insert-chi-so':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $T_ID=$_POST['T_ID'];
                $THANG=$_POST['THANG'];
                $chieucao=$_POST['chieucao'];
                $cannang=$_POST['cannang'];
                insert_chi_so_tre($T_ID,$THANG,$chieucao,$cannang);       
            }
            include "Tre/Tre-chi-so.php";

            break;   
        case 'danh-sach-chi-so-tre':
            include "Tre/Tre-danh-sach-chi-so.php";
            
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
            $list_lop=load_all_lop();
            include "Lop/Lop-danh-sach.php";
            break;
        case 'danh-sach-lop':
            $list_nam_hoc=load_all_nam_hoc();
            $list_lop=load_all_lop();
            include "Lop/Lop-danh-sach.php";
            break;
        case 'loc-lop-theo-nam-khoicb':
            if(isset($_POST['loc-lop-theo-nam'])&&($_POST['loc-lop-theo-nam'])){             
                $NAMHOC=$_POST['NAMHOC'];
            }else{              
                $NAMHOC='';
                } 
            // $list_lop=load_all_lop();
            $list_khoi=load_all_khoi();
            $list_nam_hoc=load_all_nam_hoc();
            $list_lop_thuoc_khoi=load_lop_thuoc_nam($NAMHOC);
            include "Lop/Lop-danh-sach_theo_nam.php";

            break;
        case 'loc-lop-theo-khoi':
            if(isset($_GET['KHOI'])&&($_GET['KHOI']!='')){
                $KHOI=$_GET['KHOI'];
               
                $list_lop=load_lop_thuoc_khoi($_GET['KHOI']);
            }
            include "Lop/Lop-danh-sach-theo-khoi.php";
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
                $list_nam_hoc=load_all_nam_hoc();
                include "Lop/Nam-hoc-danh-sach.php";
            break;
        case 'danh-sach-nam-hoc':
            $list_nam_hoc=load_all_nam_hoc();
            include "Lop/Nam-hoc-danh-sach.php";
            break;
        case 'admin-dang-xuat':
            session_unset();
            header('location: ../index.php');
            ob_end_flush();
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