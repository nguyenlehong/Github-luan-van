<?php
include "../Model/pdo.php";
include "../Model/Mon-an.php";

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




            
        case 'them-can-bo':
            include "Can-bo/Them-can-bo.php";
            break;
        case 'danh-sach-can-bo':
            include "Can-bo/Danh-sach-can-bo.php";
            break;
            

        case 'phan-cong':
            include "Can-bo/Phan-cong.php";
            break;
        case 'nhiem-vu':
            include "Can-bo/Nhiem-vu.php";
            break;

            
        case 'them-tre':
            include "Tre/Tre-them.php";
            break;
        case 'danh-sach-tre':
            include "Tre/Tre-danh-sach.php";
            break;

         case 'them-lop':
            include "Lop/Lop-them.php";
            break;
        case 'danh-sach-lop':
            include "Lop/Lop-danh-sach.php";
            break;
        case 'them-khoi':
            include "Lop/Khoi-them.php";
            break;
        case 'danh-sach-khoi':
            include "Lop/Khoi-danh-sach.php";
            break;
        case 'them-nam-hoc':
            include "Lop/Nam-hoc-them.php";
            break;
        default:
            # code...
            break;
    }
}
include "footer.php";
?>