<div class="content">
    <div class="tieu-de">
        <h3 class="font"> Danh sách trẻ <?=$ten_lop?></h3>
    </div>
    <?php
$conn = new PDO("mysql: host=localhost; dbname=luanvan", "root","");
 error_reporting(0);

    $thongbao="";
    if(isset($_POST['but_update'])){
        if(isset($_POST['update'])){
            foreach ($_POST['update'] as $updateid ){
                $CHIEUCAO =$_POST['CHIEUCAO_'.$updateid];
                $CANNANG =$_POST['CANNANG_'.$updateid];      
                if($CHIEUCAO !='' && $CANNANG !=''){
                    $capnhat = "update chi_so_phat_trien set
                    CHIEUCAO='".$CHIEUCAO."',CANNANG='".$CANNANG."'
                    where T_ID=".$updateid;
                    mysqli_query($conn,$capnhat);
                    
                    
                }

            }
        $thongbao = '<h3> Cập nhật thành công </h3>';

        }
    }
    ?>
    <div class="noi-dung-100">

        <form action="" method="POST">
            <?php
            echo $thongbao;
            ?>
            <button type="submit" class="width100 trang btn btn-success text-white" name='but_update'>
                Lưu</button>
            <table class="table table-hover">
                <tbody>
                    <tr class="table-primary">
                        <th scope="col" class="width-table-100"><input type="checkbox" name="" id='checkAll'>check
                        </th>
                        <th scope="col" class="width-table-100">STT</th>
                        <th scope="col" class="width-table-150">Họ & tên</th>
                        <th scope="col" class="width-table-150">Ngày sinh</th>
                        <th scope="col" class="width-table-150">Giới tính</th>
                        <th scope="col" class="width-table-150">Chiều cao </th>
                        <th scope="col" class="width-table-150">Cân nặng</th>
                    </tr>

                    <?php
                $i=1;
                foreach ($list_tre as $tre) {
                   extract($tre);
                 
                   echo '
                   <tr>
                <td><input type="checkbox" name="update[]" value="'.$T_ID.'" id=""></td>

                   <th scope="row">'.$i.'</th>
                   <td class="width-table-300">'.$T_HOTEN.'</td>
                   <td> '.$T_NGAYSINH.'</td>
                   <td>'.$T_PHAI.'</td>
                   <td><input type="number" name="CHIEUCAO_<?= $T_ID ?>" value="' .$CHIEUCAO.'"></td>
                    <td><input type="number" name="CANNANG_<?= $T_ID ?>" value="' .$CANNANG.'"></td>

                    </tr>

                    '; $i++;
                    }
                    ?>

                </tbody>
            </table>
        </form>
    </div>

</div>
<script type=" text/javascript">
$(document).ready(function() {
    // Check/Uncheck AL1
    $('#checkAll').change(function() {
        if ($(this).is(':checked')) {
            $('input[name="update[]"]').prop('checked', true);
        } else {
            $('input[name="update[]"]').each(function() {
                $(this).prop('checked', false);
            });
        }
    });
    //checkbox
    $('input[name="update[]"]').click(function() {
        var total_checkboxes = $('input[name="update[]"]').length;
        var total_checkboxes_checked = $('input[name="update[]"]:checked').length;
        if (total_checkboxes_checked == total_checkboxes) {
            $('#checkAll').prop('checked', true);
        } else {
            $('#checkAll').prop('checked', false);
        };
    });
});
</script>