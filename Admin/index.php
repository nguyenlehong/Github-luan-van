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
// include "View/login.php";
include "nav.php";
include "menu.php";
$list_thuc_don=load_all_thuc_don();
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
   
        case 'insert-thuc-don':
            if(isset($_POST['luu'])&&($_POST['luu'])){             
                $buoi=$_POST['BUOI'];
                $thu=$_POST['THU'];
                $mon=implode(', ' ,$_POST['M_TEN']);
              
                $con = new mysqli('localhost','root','','luanvan');     
                $sql = "SELECT * FROM thuc_don WHERE THU = '$thu' and BUOI = '$buoi'";
	            $result = $con->query($sql);
	            if($result->num_rows>0){
		            $thongbao="Thực đã tồn tại! Vui lòng nhập lại";
                    $list_khoi=load_all_khoi();
                    $list_buoi=load_all_buoi();
                    $list_thu=load_all_thu();
                    $list_mon=load_all_mon();
                    include 'Mon-an/Thuc-don-them.php';
                    break;
	            }else{
                    insert_thuc_don($buoi,$thu,$mon);        
                    // $list_buoi=load_all_buoi();
                    // $list_thu=load_all_thu();
                    // $list_mon=load_all_mon();
                    $list_thuc_don=load_all_thuc_don();
                    include 'Mon-an/Thuc-don-danh-sach.php';
                    break; 
                }
                

            }          
          
             
            // $khoi=$_POST['KHOI'];
              // insert_thuc_don($khoi,$buoi,$thu,$mon);   
            //   $list_khoi=load_all_khoi(); 
        case 'xoa-thuc-don-thu-2':
            xoa_thuc_don_thu2();
            $list_thuc_don=load_all_thuc_don();
            include 'Mon-an/Thuc-don-danh-sach.php';
            break;
        case 'xoa-thuc-don-thu-3':
            xoa_thuc_don_thu3();
            $list_thuc_don=load_all_thuc_don();
            include 'Mon-an/Thuc-don-danh-sach.php';
            break;
        case 'xoa-thuc-don-thu-4':
            xoa_thuc_don_thu4();
            $list_thuc_don=load_all_thuc_don();
            include 'Mon-an/Thuc-don-danh-sach.php';
            break;
        case 'xoa-thuc-don-thu-5':
            xoa_thuc_don_thu5();
            $list_thuc_don=load_all_thuc_don();
            include 'Mon-an/Thuc-don-danh-sach.php';
            break;
        case 'xoa-thuc-don-thu-6':
            xoa_thuc_don_thu6();
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
            // $list_nam_hoc=load_all_nam_hoc();
            $list_nhiem_vu=load_all_nhiem_vu();
            $list_can_bo=load_all_can_bo();
            $list_lop=load_all_lop_hoat_dong();

            include "Can-bo/Phan-cong.php";
            break;


            
        case 'insert-phan-cong':
            $max=2;
            $conn = new mysqli('localhost','root','','luanvan'); 
            if(isset($_POST['luu'])&&($_POST['luu'])){              
                $L_ID=$_POST['L_ID'];
                $NV_ID=$_POST['NV_ID'];
                $CB_ID=$_POST['CB_ID']; 
                        
                $query="SELECT count(L_ID) AS tong from phan_cong WHERE phan_cong.L_ID=".$L_ID;         
                $result=mysqli_query($conn,$query); 
                $data = mysqli_fetch_assoc($result);
                if($data['tong'] < $max){
                    $sql2 = "SELECT * from phan_cong WHERE (phan_cong.CB_ID='$CB_ID' OR phan_cong.NV_ID='$NV_ID') 
                            AND phan_cong.L_ID= '$L_ID'";
                    $result2 = $conn->query($sql2);
                        if($result2->num_rows>0){
                            $thongbao="Cán bộ hoặc nhiệm vụ đã được phân công! Vui lòng nhập lại";
                            $list_nhiem_vu=load_all_nhiem_vu();
                            $list_can_bo=load_all_can_bo();
                            $list_lop=load_all_lop_hoat_dong();           
                            include "Can-bo/Phan-cong.php";
                            break;
                        }else{
                            insert_phan_cong($L_ID,$NV_ID,$CB_ID);
                            $list_phan_cong=load_all_phan_cong_hien_tai();
                            // $list_phan_cong=load_all_phan_cong();

                            include "Can-bo/Danh-sach-phan-cong.php";
                            break;
                        }               
                   }else{
                       $thongbao="Lỗi! Lớp đã phân công đủ cán bộ";
                       $list_nhiem_vu=load_all_nhiem_vu();
                       $list_can_bo=load_all_can_bo();
                       $list_lop=load_all_lop_hoat_dong();
           
                       include "Can-bo/Phan-cong.php";
                       break;
                   }
                
                
            }   
             // $NAMHOC=$_POST['NAMHOC'];         
             // insert_phan_cong($NAMHOC,$L_ID,$NV_ID,$CB_ID);
            // $list_nam_hoc=load_all_nam_hoc();
            // $list_nhiem_vu=load_all_nhiem_vu();
            // $list_can_bo=load_all_can_bo();
            // $list_lop=load_all_lop();
          
        case 'danh-sach-phan-cong':
            $list_phan_cong=load_all_phan_cong();
            include "Can-bo/Danh-sach-phan-cong-all.php";
            break;
        case 'danh-sach-phan-cong-hien-tai':
            $list_phan_cong=load_all_phan_cong_hien_tai();
            include "Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'xoa-phan-cong':
            if(isset($_GET['PC_ID'])&&($_GET['PC_ID'])>0){
                delete_phan_cong($_GET['PC_ID']);
            }           
            $list_phan_cong=load_all_phan_cong();
            include "Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'update-cong':
            if(isset($_GET['PC_ID'])&&($_GET['PC_ID'])>0){
                $PC_ID=$_GET['PC_ID'];
                $phancong=load_1_phan_cong($PC_ID);        
              }
                $list_can_bo=load_all_can_bo();

            include "Can-bo/Cap-nhat-phan-cong.php";
            break;
        case 'luu-cap-nhat-phan-cong':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $PC_ID=$_POST['PC_ID'];
                $tencanbo=$_POST['CB_ID'];
                update_can_bo_phan_cong($PC_ID,$tencanbo);    
            } 
            $list_phan_cong=load_all_phan_cong_hien_tai();
            include "Can-bo/Danh-sach-phan-cong.php";
            break;
        case 'tim-can-bo-trong-phan-cong':
            if(isset($_POST['tim'])&&($_POST['tim'])){
                $id=$_POST['ten'];
                
                }else{
                    $id='';         
                }
            $list_phan_cong=load_all_phan_cong_tim($id);   
            include "Can-bo/Danh-sach-phan-cong-all.php";
            
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
            $list_nam_hoc=load_all_nam_hoc_hoat_dong();
            $list_khoi=load_all_khoi();
            $list_khoan_thu=load_all_khoan_thu();     
            include "Lop/Muc-thu-them.php"; 
            break;
        case 'luu-them-muc-thu':
            $conn = new mysqli('localhost','root','','luanvan'); 
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $nam=$_POST['NAMHOC'];
                $khoi=$_POST['KHOI'];
                $kt=$_POST['KHOANTHU'];
                $tien=$_POST['sotien'];
                $sql = "SELECT * from muc_thu WHERE muc_thu.KHOI='$khoi' and muc_thu.KT_ID='$kt' 
                        AND muc_thu.NAMHOC= '$nam'";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    $thongbao="Khoản thu đã tồn tại! vui lòng nhập lại";
                    // $list_nam_hoc=load_all_nam_hoc();
                    $list_nam_hoc=load_all_nam_hoc_hoat_dong();

                    
                    $list_khoi=load_all_khoi();
                    $list_khoan_thu=load_all_khoan_thu();     
                    include "Lop/Muc-thu-them.php"; 
                    break;

                }else{
                    insert_muc_thu($nam,$khoi,$kt,$tien);    
                    $list_muc_thu_mam= load_muc_thu_khoi_mam();
                    $list_muc_thu_choi= load_muc_thu_khoi_choi();
                    $list_muc_thu_la= load_muc_thu_khoi_la();
                    include "Lop/Muc-thu-danh-sach-hien-tai.php";
                    break;
        }
    }
           
        case 'danh-sach-muc-thu':
            $list_muc_thu_mam= load_muc_thu_khoi_mam();
            $list_muc_thu_choi= load_muc_thu_khoi_choi();
            $list_muc_thu_la= load_muc_thu_khoi_la();
            include "Lop/Muc-thu-danh-sach-hien-tai.php";
            break;
        case 'danh-sach-muc-thu-khoi-mam':
            $list_muc_thu_mam= load_muc_thu_khoi_mam();
            include "Lop/Muc-thu-khoi-mam.php"; 
            break;
        case 'danh-sach-muc-thu-khoi-choi':
            $list_muc_thu_choi= load_muc_thu_khoi_choi();
            include "Lop/Muc-thu-khoi-choi.php";    
            break;
        case 'danh-sach-muc-thu-khoi-la':
            $list_muc_thu_la= load_muc_thu_khoi_la();
            include "Lop/Muc-thu-khoi-la.php";    
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
            // $list_lop=load_lop_thuoc_khoi($KHOI);
            $list_tre=load_1_tre();
            $list_lop=load_all_lop_hoat_dong();
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
//         case 'chon-lop':
//             if(isset($_POST['loc-lop'])&&($_POST['loc-lop'])){
//                 $NAMHOC=$_POST['NAMHOC'];
//             }else{
//                 $NAMHOC='';
//                 }      
//             $list_nam_hoc=load_all_nam_hoc();
            
//             $list_nam_hoc2=load_lop_thuoc_khoi($NAMHOC);
// v
//             $list_khoi=load_all_khoi();
            
//             $list_lop=load_lop_thuoc_khoi($KHOI);
//             $list_tre=load_1_tre();

//             include "Tre/Tre-chon-lop.php";
//             break;
        case 'insert-tre-chon-lop':
            $max=25;
            $conn = new mysqli('localhost','root','','luanvan');     

            if(isset($_POST['luu'])&&($_POST['luu'])){
                $idlop=$_POST['L_ID'];
                $idtre=$_POST['T_ID'];    
                $query="SELECT count(L_ID) AS tong from lop_tre 
                WHERE lop_tre.L_ID=".$idlop;         
                    $result=mysqli_query($conn,$query); 
                    $data = mysqli_fetch_assoc($result);
                   if($data['tong'] < $max){
                        insert_tre_chon_lop($idlop,$idtre);
                        insert_tre_cs_dau_hk1($idlop,$idtre);
                        insert_tre_cs_cuoi_hk1($idlop,$idtre);
                        insert_tre_cs_dau_hk2($idlop,$idtre);
                        insert_tre_cs_cuoi_hk2($idlop,$idtre);
                        insert_tre_phieu_thu($idlop,$idtre);

                        $list_all_tre=load_all_tre();
                        include "Tre/Tre-danh-sach.php";
                   }else{
                       $thongbao="Lỗi! Lớp đã đầy chọn lại lớp";
                    $list_lop=load_all_lop_hoat_dong();
                    $list_tre=load_1_tre();
                    include "Tre/Tre-chon-lop.php";
                   }
            }

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
      //load_all_tre()
            $list_all_tre=load_all_tre_dang_hoat_dong();
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
            $list_lop=load_all_lop_hoat_dong();
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
                $ten=$_POST['ten'];
                $bd1=$_POST['bdhk1'];
                $kt1=$_POST['kthk1'];
                $bd2=$_POST['bdhk2'];
                $kt2=$_POST['kthk2'];
                
                insert_nam_hoc($namhoc,$ten,$bd1,$kt1,$bd2,$kt2);        
                }
                $list_nam_hoc=load_all_nam_hoc();
                include "Lop/Nam-hoc-danh-sach.php";
            break;
        case 'danh-sach-nam-hoc':
            $list_nam_hoc=load_all_nam_hoc();
            include "Lop/Nam-hoc-danh-sach.php";
            break;
        case 'cap-nhat-hien-an-nam':
            if(isset($_GET['NAMHOC'])&&($_GET['NAMHOC']!='')){
                $NAMHOC=$_GET['NAMHOC'];   
                $list_1_nam=load_1_nam_hien_an($NAMHOC);
            }
            include "Lop/Nam-hoc-cap-nhat-hien-an.php";
            break;
            
        case 'luu-trang-thai-nam-hoc':
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
            include "Lop/Nam-hoc-danh-sach.php";
            break;
            
        case 'admin-dang-xuat':
            session_unset();
            header('location: ../index.php');
            ob_end_flush();
            break;
        case 'chuyen-lop':
            $list_lop=load_all_lop_hoat_dong();
            include "Lop/Len-lop-cho-tre.php";
            break;
        case 'doi-mat-khau':
            include 'Doi-mat-khau.php';
            break;
        case 'luu-mat-khau-moi':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $mk=$_POST['mk'];
                 $mkmoi=$_POST['mkmoi'];       
                 $id=$_POST['ID'];  
                 if($mk==$mkmoi){           
                                                             //ham admin sai
                        admin($id,$mk);                 
                        $thongbao="Đổi mật khẩu thành công";       
                        include 'Doi-mat-khau.php';
                 }
                 if($mk != $mkmoi){
                        $thongbaoloi2="Nhập lại mật khẩu mới!";                          
                        include 'Doi-mat-khau.php';
                     
                 }        
            
            }
                
            break;
        case 'trang-chu':
             $list_thuc_don=load_all_thuc_don();
            include 'home.php';
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