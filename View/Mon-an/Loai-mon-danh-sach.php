<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách loại món</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_loai_mon as $loaimon) {
            extract($loaimon);
           
            echo '
            <div class="alert alert-primary" role="alert">
            '.$LM_TEN.'
           
        </div>
            
            ';
        }

        ?>

    </div>
    <div style="height:30px">

    </div>
</div>