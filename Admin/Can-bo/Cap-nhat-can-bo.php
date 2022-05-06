<?php
if(is_array($canbo)){
    extract($canbo);
}
?>
<div class="content">
    <div class="tieu-de">
        <h3 class="font">Cập nhật cán bộ</h3>
    </div>
    <div class=noi-dung-80>
        <?php
        if(isset($thongbao)&&($thongbao!=""))
        echo'
        <div class="alert alert-success" role="alert">
        <h5 style="text-align: center;">'.$thongbao.'</h5>
    </div>
        ';
        ?>


        <form action="index.php?a=cap-nhat-thong-tincb" method="POST" autocomplete="off">
            <!-- <fieldset disabled>
                <div class=" form-group row ">

                    <label for=" inputText3" class="col-sm-2 col-form-label">ID cán bộ</label>
                    <div class="col-sm-10 pad20px">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </fieldset> -->
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Họ & tên</label>
                <div class="col-sm-10 pad20px">
                    <input type="text" class="form-control " id="inputText3" placeholder="VD: Lê Hồng Nguyên"
                        name="hoten" required value="<?=$CB_HOTEN?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate3" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10 pad20px">
                    <input type="date" class="form-control " id="inputText3" placeholder="" name="ngaysinh" required
                        value="<?=$CB_NGAYSINH?>">
                </div>
            </div>


            <div class="form-group row">
                <label for="inputDate3" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10 pad20px">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phai" id="exampleRadios1" value="Nam"
                            checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Nam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phai" id="exampleRadios2" value="Nữ">
                        <label class="form-check-label" for="exampleRadios2">
                            Nữ
                        </label>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 pad20px">
                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="nguyen@gmail.com"
                        name="email" required value="<?=$CB_EMAIL?>">
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputNumber3" class="col-sm-2 col-form-label">Điện thoại</label>
                <div class="col-sm-10 pad20px">
                    <input type="number" class="form-control " id="inputText3" placeholder="VD: 0921 345 345" name="sdt"
                        required value="<?=$CB_SDT?>">
                </div>
            </div>
            <div class=" form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Địa Chỉ</label>
                <div class="col-sm-10 pad20px">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diachi"
                        required> <?=$CB_DIACHI?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success width100" value="luu" name="luu">Cập nhật</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="index.php?a=danh-sach-can-bo"> <button type="button"
                            class=" trang btn btn-info text-white">Danh
                            sách</button></a>
                </div>
            </div>
            <input type="hidden" name="id" value="<?=$CB_ID?>">
        </form>
    </div>
    <div style="height:25px"></div>
</div>

</form>