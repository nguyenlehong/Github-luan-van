<?php
if(isset($_SESSION['bep'])){
    extract($_SESSION['bep']);
}

?><div class="haeder">
    <h3>Hệ thống quản lý</h3>

    <div class="header-user">
        <img src="../Upload/user.png" alt="" width="40px" height="40px">

        <p class="" style="font-size: 20px">
            <?=$taikhoanbep?>
        </p>
        <ul>

            <li> <a href="index.php?c=dang-xuat">Đăng xuất</a></li>

        </ul>
    </div>

</div>