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

if(isset($_SESSION['user'])){
    extract($_SESSION['user']);  
}
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
            $list_phan_cong=load_all_phan_cong_hien_tai();
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
        case 'cap-nhat-tre-theo-lopcb':
            if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                $L_ID=$_GET['L_ID'];            
                $list_tre=load_tre_thuoc_lop($L_ID);
                $ten_lop=load_ten_lop($L_ID);
            }
            include "View/Tre/Tre-danh-sach-theo-lop-cap-nhat.php";
            break;
        case 'cap-nhat-thong-tin-ct-trecb':
            if(isset($_GET['T_ID'])&&($_GET['T_ID'])>0){
                $tre=cap_nhat_1_tre($_GET['T_ID']);
            }
              include "View/Tre/Hien-thi-Cap-nhat-thong-tin-tre.php";
            break;
        case 'luu-cap-nhat-thong-chi-tiet-tin-tre':
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
            include "View/Tre/Hien-thi-Cap-nhat-thong-tin-tre.php";
            break;
        case 'danh-sach-lop':         
            $list_khoi=load_all_khoi();
            $list_lop_thuoc_khoi=load_all_lop2($_SESSION['user']['CB_ID']);
            $list_nam_hoc=load_all_nam_hoc();
            // $list_lop_thuoc_khoi=load_lop_thuoc_khoi_NN($KHOI,$NAMHOC);
            include "View/Lop/Lop-danh-sach.php";
            break;
        case 'danh-sach-lop-phieu-thu':
            $list_khoi=load_all_khoi();
            $list_lop_thuoc_khoi=load_all_lop2($_SESSION['user']['CB_ID']);
            $list_nam_hoc=load_all_nam_hoc();
            include "View/Lop/Lop-danh-sach-phieu-thu.php";
            break;

            
        case 'loc-lop-theo-nam-khoi':
            if(isset($_POST['loc-lop-theo-nam'])&&($_POST['loc-lop-theo-nam'])){             
                $NAMHOC=$_POST['NAMHOC'];
            }else{              
                $NAMHOC='';
                } 
            $list_khoi=load_all_khoi();
            $list_nam_hoc=load_all_nam_hoc();
            $list_lop_thuoc_khoi=load_lop_thuoc_nam($NAMHOC);
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
        case 'danh-sach-mon-an-theo-loai-mon':
            if(isset($_GET['LM_ID'])&&($_GET['LM_ID']>0)){
                $LM_ID=$_GET['LM_ID'];              
                $list_mon=load_mon_theo_loai2($_GET['LM_ID']);  
            }
            include "View/Mon-an/Mon-an-danh-sach-theo-loai.php";
            break;
        case 'danh-sach-mon-an':
            $list_mon=load_all_mon();
            include "View/Mon-an/Mon-an-danh-sach.php";
            break;
        case 'danh-sach-thuc-don':
            $list_thuc_don=load_all_thuc_don_bep();
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
        case 'cap-nhat-tre':
            $list_lop=load_all_lop_theo_cb($_SESSION['user']['CB_ID']);
            include "View/Tre/Danh-sach-lop.php";
            break;
        // case 'nhap-chi-so-tre': 
        //     $conn = new mysqli('localhost','root','','luanvan');
        //     error_reporting(0);      
        //     include "View/Lop/Tre-chi-so-theo-lop.php";
        //     break;
        // case 'nhap-chi-so-tre2': 
        //     $conn = new mysqli('localhost','root','','luanvan');
        //     error_reporting(0);
        //     include "View/Lop/Tre-chi-so-theo-lop2.php";
        //     break;
        // case 'nhap-chi-so-tre3': lop/lop-danh-sach.php chu thich cuoi cung 
        //     $conn = new mysqli('localhost','root','','luanvan');
        //     error_reporting(0);     
        //     include "View/Lop/Tre-chi-so-theo-lop3.php";
        //     break;
        case 'nhap-chi-so-lan1':
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);
            include "View/Lop/Nhap-chi-so-lan1.php";
            break;
        case 'nhap-chi-so-lan2':
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);
            include "View/Lop/Nhap-chi-so-lan2.php";
            break;
        case 'nhap-chi-so-lan3':
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);
            include "View/Lop/Nhap-chi-so-lan3.php";
            break;
        case 'nhap-chi-so-lan4':
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);
            include "View/Lop/Nhap-chi-so-lan4.php";
            break;
        case 'nhap-phieu-thu-lop':
            $conn = new mysqli('localhost','root','','luanvan');
            error_reporting(0);
            include "View/Lop/Nhap-phieu-thu.php";
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