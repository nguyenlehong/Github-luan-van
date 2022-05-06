<div class="content">
    <div class="tieu-de">
        <h3 class="font">Danh sách món ăn</h3>
    </div>
    <div class="noi-dung-100">
        <table class="table table-hover">

            <tbody>
                <tr class="table-primary">
                    <th class="width-table-50" scope="col">STT</th>
                    <th class="width-table-250" scope="col">Tên món</th>
                    <th class="width-table-250" scope="col">Ảnh</th>
                    <th class="width-table-600" scope="col">Mô tả</th>


                </tr>



                <?php
                 $i=1;
                foreach ($list_mon as $mon) {
                    extract($mon);
                    $xoa_mon="index.php?a=delete-mon-an&M_ID=".$M_ID;
                    $duong_dan="Upload/".$M_HINH;
                    $hinh="<img  src='".$duong_dan."' height='100' width='auto'>";
                    echo '                   
                    <tr>
                    <th class="width-table-50" scope="row">'.$i.'</th>
                    <td class="width-table-250">'.$M_TEN.'</td>
                    <td class="width-table-250">'.$hinh.' </td>
                    <td class="width-table-600">'.$M_MOTA.'</td>
                   
                </tr>
                    
                    ';
                   $i=$i + 1;
                }
                
                
                ?>


            </tbody>
        </table>

    </div>
    <div style="height:30px">

    </div>
</div>