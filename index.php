<?php
include "View/header.php";
include "View/login.php";
// include "View/nav.php";
// include "View/menu.php";
// include "View/Giao-vien/danh-sach-giao-vien.php";


if(isset($_GET['a'])){
    $act=$_GET['a'];
    switch ($a) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
}
include "View/footer.php";
?>