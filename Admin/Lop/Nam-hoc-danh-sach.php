<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách năm học</h3>
    </div>
    <div class=noi-dung-70>
        <?php
        foreach ($list_nam_hoc as $namhoc) {
            extract($namhoc);
            echo '
            <div class="alert alert-info" role="alert">
           '.$NAMHOC.'
            <a href="" class="gachchands">
                <button type=" reset" class="btn btn-danger" onclick="deleteLM()">
                    <ion-icon name="trash-outline"></ion-icon>
                </button>
            </a>
            <a href="" class="gachchands">
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