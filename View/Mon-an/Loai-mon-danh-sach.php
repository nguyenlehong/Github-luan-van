<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách loại món</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_loai_mon as $loaimon) {
            extract($loaimon);
            $list_mon="Xu-ly.php?b=danh-sach-mon-an-theo-loai-mon&LM_ID=".$LM_ID; 
            echo '
            <div class="alert alert-primary" role="alert">
            '.$LM_TEN.'
            <a href="'.$list_mon.'" class="gachchands">
                <button type="button" class="btn btn-success">
                <ion-icon name="list-outline"></ion-icon>
            </button>
            </a>
           
        </div>
            
            ';
        }

        ?>

    </div>
    <div style="height:30px">

    </div>
</div>