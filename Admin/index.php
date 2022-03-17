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
                
        case 'them-giao-vien':
            include "Giao-vien/Them-giao-vien.php";
            break;
        case 'danh-sach-giao-vien':
            include "Giao-vien/Danh-sach-giao-vien.php";
            break;
            
        default:
            # code...
            break;
    }
}
include "footer.php";
?>