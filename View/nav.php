<?php
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
}

?>
<div class="haeder">
    <h3>Hệ thống quản lý</h3>
    <!-- <img src="../Upload/user.png" alt="" width="40px" height="40px"> -->
    <div class="header-user">
        <img src="Upload/user.png" alt="" width="40px" height="40px">

        <p class="">
            <?=$CB_HOTEN?>
        </p>
        <ul>
            <li> <a href="">Hồ sơ</a></li>
            <li> <a href="Xu-ly.php?b=dang-xuat">Đăng xuất</a></li>

        </ul>
    </div>

</div>