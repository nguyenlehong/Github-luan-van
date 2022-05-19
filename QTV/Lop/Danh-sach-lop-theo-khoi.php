<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách lớp</h3>
    </div>
    <div class=noi-dung-70>
        <h5>Các nhóm thuộc <?=$KHOI?></h5>
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
        <a href="index.php?b=danh-sach-khoi"> <button type="button" class=" trang btn btn-info text-white">Danh
                sách khối</button></a>
    </div>

    <div style="height:25px"></div>
</div>