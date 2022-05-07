<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách khoản thu</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_khoan_thu as $khoan_thu) {
            extract($khoan_thu);
            $xoa="index.php?a=xoa-khoan-thu&KT_ID=".$KT_ID;
            echo '
            <div class="alert alert-primary" role="alert">
            '.$KT_NOIDUNG.'
           
    
        </div>
            
            ';
        }

        ?>
    </div>
    <div style="height:30px"></div>

</div>
<!-- <a href="'.$xoa.'" class="gachchands">
    <button type="button" class="btn btn-danger">
        <ion-icon name="trash-outline"></ion-icon>
    </button>
</a>
<a href="#" class="gachchands">
    <button type="button" class="btn btn-success">
        <ion-icon name="list-outline"></ion-icon>
    </button>
</a> -->