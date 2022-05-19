<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp </h3>
    </div>
    <div class=noi-dung-70>
        <a href="index.php?b=them-lop"> <button type="button" class=" trang btn btn-success width100 text-white">Thêm
            </button></a>
        <!-- <form action="index.php?a=loc-lop-theo-nam-khoicb" method="POST">

            <div class="form-group" style="padding-top: 10px;padding-bottom: 10px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="loc-lop-theo-nam"
                    value="loc-lop-theo-nam">Tìm
                    kiếm</button>
                <label for=" exampleFormControlSelect1"></label>
                <select class="form-control" id="exampleFormControlSelect1" name="NAMHOC">
                    <?php
                            foreach ($list_nam_hoc as $namhoc) {
                            extract($namhoc);
                            echo '
                            <option value="'.$NAMHOC.'">'.$TENNAMHOC.'</option>                            
                            ';
                        }
                        ?>
                </select>
            </div>

        </form> -->

        <?php
        foreach ($list_lop as $lop) {
            extract($lop);
           
            echo '
            <div class="alert alert-primary" role="alert">
            '.$L_TEN.' <ion-icon name="calendar-outline"></ion-icon> '.$TENNAMHOC.'       
 
        


        </div>
            
            ';
        }
        ?>

    </div>
    <div style="height:25px"></div>
</div>
<!-- <a href="'.$xoa.'" class="gachchands">
    <button type="button" class="btn btn-danger">
        <ion-icon name="trash-outline"></ion-icon>
    </button>
</a>
$xoa="index.php?b=xoa-lop&L_ID=".$L_ID; 


xóa 1 lớp ở trang qtv
-->