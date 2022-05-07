<?php
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
    
}

?><div class="menu ">
    <div class="menu2 ">
        <li class="item2 " id="giaovien">
            <a href="#giaovien" class="btn2 ">
                <ion-icon name="person-outline"></ion-icon> Cán bộ
            </a>
            <div class="smenu ">
                <a href="Xu-ly.php?b=danh-sach-can-bo">Danh sách</a>
                <a href="Xu-ly.php?b=danh-sach-nhiem-vu ">Nhiệm vụ</a>
                <a href="Xu-ly.php?b=danh-sach-phan-cong ">Phân công</a>

            </div>
        </li>

        <li class="item2 " id="hocsinh">
            <a href="#hocsinh" class="btn2 ">
                <ion-icon name="person-outline"></ion-icon>

                Quản lý học sinh
            </a>
            <div class="smenu">

                <a href="Xu-ly.php?b=cap-nhat-tre"> Cập nhật trẻ</a>
                <a href=" ">Chỉ sổ</a>

            </div>
        </li>

        <li class="item2 " id="lop">
            <a href="#lop" class="btn2 ">
                <ion-icon name="people-outline"></ion-icon>
                Quản lý lớp
            </a>
            <div class="smenu ">
                <!-- <a href="Xu-ly.php?b=danh-sach-khoi ">Danh sách khối</a> -->
                <a href="Xu-ly.php?b=danh-sach-lop ">Chỉ số lớp</a>
                <a href="Xu-ly.php?b=danh-sach-khoan-thu ">Khoản thu</a>

            </div>
        </li>


        <li class="item2 " id="monan">
            <a href="#monan" class="btn2 ">
                <ion-icon name="fast-food-outline"></ion-icon>
                Quản lý Món Ăn
            </a>
            <div class="smenu ">
                <a href="Xu-ly.php?b=danh-sach-loai-mon "> Loại món ăn</a>
                <a href="Xu-ly.php?b=danh-sach-mon-an">Món ăn</a>
                <a href="Xu-ly.php?b=danh-sach-thuc-don ">Thực đơn</a>

            </div>
        </li>
        <!-- fasdf -->
        <!-- adfa -->

        <li class="item2 " id=" ">
            <a href=" " class="btn2">
                <ion-icon name="close-outline"></ion-icon>
                Đóng
            </a>

        </li>
        <!-- <li class="item2 ">
        <a href=" " class="btn2 ">Đóng</a>
    </li> -->
    </div>
</div>