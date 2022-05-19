<?php
if(isset($_SESSION['qtv'])){
    extract($_SESSION['qtv']);
}

?><div class="haeder">
    <h3>Hệ thống quản lý</h3>

    <div class="header-user">
        <img src="../Upload/user.png" alt="" width="40px" height="40px">

        <p class="" style="font-size: 20px">
            <?=$taikhoan?>
        </p>
        <ul>
            <li> <a href="index.php?b=doi-mat-khau">Đổi mật khẩu</a></li>
            <li> <a href="index.php?b=dang-xuat">Đăng xuất</a></li>

        </ul>
    </div>

</div>