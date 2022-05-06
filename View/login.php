<?php
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
}
?><div class="content-doi-mk">
    <!-- <div class="dangnhap-doi-mk"> -->
    <div class="container" style="width:323px;">
        <h2>Đổi mật khẩu </h2>
        <?php
if(isset($thongbao)&&($thongbao!=""))
echo'<p style="color:green">'.$thongbao.'</p>
';
?>
        <?php
if(isset($thongbaoloi)&&($thongbaoloi!=""))
echo'<p style="color:red">'.$thongbaoloi.'</p>
';
?>
        <?php
if(isset($thongbaoloi2)&&($thongbaoloi2!=""))
echo'<p style="color:red">'.$thongbaoloi2.'</p>
';
?>

        <form action="Xu-ly.php?b=cap-nhat-mat-khau" autocomplete=" on" method="POST">
            <div class="inputBox">
                <input type="password" autocomplete="off" required="required" name="mk">
                <span>Mật khẩu </span>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="mkmoi" pattern=".{6,}">
                <span>Mật khẩu mới ít nhất 6 ký tự</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="mkmoicheck">
                <span>Nhập lại mật khẩu mới</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Lưu" name="luu">
            </div>
            <input type="hidden" name="CB_ID" value="<?=$CB_ID?>">
            <input type="hidden" name="CB_MATKHAU" value="<?=$CB_MATKHAU?>">
        </form>
    </div>
    <!-- </div> -->
</div>