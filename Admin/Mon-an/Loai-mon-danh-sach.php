<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách loại món</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_loai_mon as $loaimon) {
            extract($loaimon);
            $delete="index.php?a=delete-loai-mon&LM_ID=".$LM_ID;
            $list_mon_theo_loai="index.php?a=list-mon-theo-loai&LM_ID=".$LM_ID;    
            echo '
            <div class="alert alert-primary" role="alert">
            '.$LM_TEN.'
           
        <a href="'.$delete.'" class="gachchands">
            <button type=" reset" class="btn btn-danger" onclick="deleteLM()">
                <ion-icon name="trash-outline"></ion-icon>
            </button>
        </a>
        <a href="'.$list_mon_theo_loai.'" class="gachchands">
            <button type="button" class="btn btn-success">
                <ion-icon name="list-outline"></ion-icon>
            </button>
        </a>
        </div>
            
            ';
        }

        ?>

    </div>
    <div style="height:25px"></div>
</div>