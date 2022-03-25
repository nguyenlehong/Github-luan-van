<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách món ăn</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-250" scope="col">Tên món</th>
                    <th class="width-table-250" scope="col">Ảnh</th>
                    <th class="width-table-600" scope="col">Mô tả</th>
                    <th scope="col">Thao tác</th>

                </tr>
            </thead>
            <tbody>
                <?php
                 $i=1;
                foreach ($list_mon as $mon) {
                    extract($mon);
                   
                    $duong_dan="../Upload/".$M_HINH;
                    $hinh="<img  src='".$duong_dan."' height='auto' width='200'>";
                    echo '                   
                    <tr>
                    <th class="width-table-50" scope="row">'.$i.'</th>
                    <td class="width-table-250">'.$M_TEN.'</td>
                    <td class="width-table-250">'.$hinh.' </td>
                    <td class="width-table-600">'.$M_MOTA.'</td>
                    <td>
                        <a href="" class="gachchan2">
                            <button type=" reset" class="btn btn-success">
                                <ion-icon name="pencil-outline"></ion-icon>
                            </button>
                        </a>
                        <a href="" class="gachchan2">
                            <button type=" reset" class="btn btn-danger">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </a>
                    </td>
                </tr>
                    
                    ';
                   $i=$i + 1;
                }
                
                
                ?>


            </tbody>
        </table>

    </div>
</div>