<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách nhiệm vụ</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_nhiem_vu as $nhiemvu) {
            extract($nhiemvu);   
            echo '
            <div class="alert alert-primary" role="alert">
            '.$NV_TEN.'
             </div>
            
            ';
        }
        ?>

    </div>
    <div style="height:25px"></div>
</div>