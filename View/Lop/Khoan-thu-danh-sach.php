<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách khoản thu</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_khoan_thu as $khoan_thu) {
            extract($khoan_thu);
            echo '
            <div class="alert alert-primary" role="alert">
            '.$KT_NOIDUNG.'
           
    
        </div>
            
            ';
        }

        ?>
    </div>
    <div style="height:25px">

    </div>
</div>