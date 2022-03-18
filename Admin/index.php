<?php
include "header.php";
// include "View/login.php";
include "nav.php";
include "menu.php";


if(isset($_GET['a'])){
    $a=$_GET['a'];
    switch ($a) {
        case 'danh-sach-loai-mon':
            include "Mon-an/Loai-mon-danh-sach.php";
            break;
        case 'them-loai-mon':
            include "Mon-an/Loai-mon-them.php";
            break;
        case 'danh-sach-mon-an':
            include "Mon-an/Mon-an-danh-sach.php";
            break;
        case 'them-mon-an':
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