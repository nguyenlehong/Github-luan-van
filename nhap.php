<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="View/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>


<body>
    <?php
        $conn = new mysqli('localhost','root','','luanvan');
    ?>
    <?php
    if(isset($_POST['but_update'])){
        if(isset($_POST['update'])){
            foreach ($_POST['update'] as $updateid ){           
                $cc =$_POST['CHIEUCAO_'.$updateid];
                $cn =$_POST['CANNANG_'.$updateid];      
                
                if($cc !='' && $cn !=''){
                    $capnhat = "update chi_so_phat_trien set
                    CHIEUCAO='".$cc."',CANNANG='".$cn."'
                    where T_ID=".$updateid;
                    mysqli_query($conn,$capnhat);
                   
                    
                }

            }

    }
}
    ?>
    <form action="" method="POST">
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
                    
                              
                    if(isset($_GET['L_ID'])&&($_GET['L_ID']>0)){
                        $L_ID=$_GET['L_ID']; }
            
                        $query="SELECT lop.L_TEN,tre.T_HOTEN,tre.T_NGAYSINH,chi_so_phat_trien.CHIEUCAO,chi_so_phat_trien.CANNANG,tre.T_PHAI,chi_so_phat_trien.T_ID
                        FROM lop INNER JOIN lop_tre
                        on lop.L_ID = lop_tre.L_ID
                        INNER JOIN tre
                        ON tre.T_ID = lop_tre.T_ID
                        INNER JOIN chi_so_phat_trien
                        on chi_so_phat_trien.T_ID = tre.T_ID
                        WHERE lop.L_ID=".$L_ID;
                        
                        $result=mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){
                            $T_ID=$row['T_ID'];
                            $cc=$row['CHIEUCAO'];
                            $cn=$row['CANNANG'];  
                            $T_HOTEN=$row['T_HOTEN'];
                            $T_NGAYSINH=$row['T_NGAYSINH'];                     
                            $T_PHAI=$row['T_PHAI'];                     

            ?>




                <tr>
                    <td><input type="checkbox" name="update[]" value='<?=$T_ID?>' id=""></td>

                    <th scope="row">
                        <?=$T_ID?>
                    </th>
                    <td class="width-table-300">
                        <?=$T_HOTEN?>
                    </td>
                    <td> <?=$T_NGAYSINH?></td>
                    <td><?=$T_PHAI?></td>
                    <td><input type="number" name="CHIEUCAO_<?= $T_ID ?>" value="<?=$cc?>"></td>
                    <td><input type=" number" name="CANNANG_<?= $T_ID ?>" value='<?=$cn?>'></td>

                </tr>
                <?php
            }
            ?>
    </form>
</body>
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

</html>