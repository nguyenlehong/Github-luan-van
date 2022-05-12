<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách năm học</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_nam_hoc as $namhoc) {
            extract($namhoc);
            $capnhat="index.php?a=cap-nhat-hien-an-nam&NAMHOC=".$NAMHOC;
            echo '
            <div class="alert alert-info" role="alert">
           '.$NAMHOC.' '.$TRANGTHAI.'
           
            <a href="'.$capnhat.'" class="gachchands">
                <button type=" reset" class="btn btn-success">
                    <ion-icon name="pencil-outline"></ion-icon>
                </button>
            </a>
        </div>
                   
            ';
        }
          
        ?>
    </div>
    <div style="height:25px"></div>
</div>