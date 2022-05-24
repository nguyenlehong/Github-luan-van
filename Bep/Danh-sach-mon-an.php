<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách món ăn</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">
            <a href="index.php?c=them-mon-an"> <button type="button"
                    class=" trang btn btn-success width100 text-white">Thêm
                </button></a>

            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-200" scope="col">Tên món</th>
                    <th class="width-table-250" scope="col">Ảnh</th>
                    <th class="width-table-600" scope="col">Mô tả</th>
                    <th scope="col">Thao tác</th>

                </tr>

                <?php
                 $i=1;
                foreach ($list_mon as $mon) {
                    extract($mon);
                    $xoa_mon="index.php?c=xoa-mon-an&M_ID=".$M_ID;
                    $duong_dan="../Upload/".$M_HINH;
                    $hinh="<img  src='".$duong_dan."' height='100' width='auto'>";
                    echo '                   
                    <tr>
                    <th  scope="row">'.$i.'</th>
                    <td>'.$M_TEN.'</td>
                    <td >'.$hinh.' </td>
                    <td >'.$M_MOTA.'</td>
                    <td>
                      
                        <a href="'.$xoa_mon.'" class="gachchan2">
                            <button type="button" class="btn btn-danger">
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