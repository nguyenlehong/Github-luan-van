<div class="content">
    <div class="tieu-de">
        <h3 class="font"> Danh sách trẻ thiếu cân</h3>
    </div>

    <div class="noi-dung-100">


        <table class=" table table-hover">
            <tr class="table-primary">

                <th scope="col" class="width-table-50">STT</th>
                <th scope="col" class="width-table-200">Họ & tên</th>
                <th scope="col" class="width-table-150">Lớp</th>
                <th scope="col" class="width-table-150">Ngày đo</th>
                <th scope="col" class="width-table-100">Chiều cao </th>
                <th scope="col" class="width-table-100">Cân nặng</th>
                <th scope="col" class="width-table-150">Xếp loại</th>
            </tr>

            <?php
                $i=1;
                foreach ($list as $tre) {
                   extract($tre);
              
                   echo '
                   <tr>
                   <th scope="row">'.$i.'</th>
                   <td ">'.$T_HOTEN.'</td>
                   <td> '.$L_TEN.'</td>
                   <td>'.$THANG.'</td>
                   <td>'.$CHIEUCAO.'</td>
                   <td>'.$CANNANG.'</td>
                   <td>'.$XEPLOAI.'</td>
                  
               </tr>
              
                   '; $i++;
                }
                ?>


    </div>
</div>