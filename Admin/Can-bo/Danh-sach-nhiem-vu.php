<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách nhiệm vụ</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_nhiem_vu as $nhiemvu) {
            extract($nhiemvu);
            $delete="index.php?a=update-nhiem-vu&NV_ID=".$NV_ID;
            $update="index.php?a=delete-nhiem-vu&NV_ID=".$NV_ID;

            
            echo '
            <div class="alert alert-primary" role="alert">
            '.$NV_TEN.'
           
        <a href="'.$update.'" class="gachchands">
            <button type=" reset" class="btn btn-danger" onclick="deleteLM()">
                <ion-icon name="trash-outline"></ion-icon>
            </button>
        </a>
        <a href="'.$delete.'" class="gachchands">
        <button type=" reset" class="btn btn-success">
            <ion-icon name="pencil-outline"></ion-icon>
        </button>
    </a>
        </div>
            
            ';
        }
        ?>

    </div>
</div>