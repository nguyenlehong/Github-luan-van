<?php
require "../tfpdf/tfpdf.php";
            $pdf = new tFPDF();
            $pdf->AddPage();
            $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
            $pdf->SetFont('DejaVu','',11);

            
$pdf->SetTitle("In danh sách trẻ  ");
$pdf->Cell(200,20,"DANH SÁCH CHỈ SỐ " ,"0","1","C");

//table
$pdf->setLeftMargin(10);
$pdf->Cell(10,10,"STT","1","0","C");
$pdf->Cell(50,10,"Họ và tên","1","0","C");
$pdf->Cell(28,10,"Ngày sinh","1","0","C");
$pdf->Cell(17,10,"CC1","1","0","C");
$pdf->Cell(17,10,"CN1","1","0","C");
$pdf->Cell(17,10,"CC2","1","0","C");
$pdf->Cell(17,10,"CN2","1","0","C");
$pdf->Cell(17,10,"CC3","1","0","C");
$pdf->Cell(17,10,"CN3","1","1","C");

// $con = new PDO("mysql: host=localhost; dbname=luanvan", "root","");
// if(isset($_GET['L_ID']))
// {

// $L_ID = $_GET['L_ID'];
// $query = "SELECT *
// FROM lop INNER JOIN lop_tre
// ON lop.L_ID=lop_tre.L_ID
// INNER JOIN tre
// ON tre.T_ID=lop_tre.T_ID WHERE lop.L_ID='$L_ID'";
// $result = $con->prepare($query);
// $result->execute();
// $i = 1;
// if($result->rowCount()!=0)
// {
// while ($tre = $result->fetch())
// {
//     $time = strtotime($tre['T_NGAYSINH']);
//     $pdf->Cell(10, 10,"$i" , "1","0","C");
//     $pdf->Cell(50, 10, $tre['T_HOTEN'], "1","0","L");
//     $pdf->Cell(28, 10, date("d/m/Y",$time), "1","0","L");
//      $pdf->Cell(17,10,"CC1","1","0","C");
//      $pdf->Cell(17,10,"CN1","1","0","C");
//      $pdf->Cell(17,10,"CC2","1","0","C");
//      $pdf->Cell(17,10,"CN2","1","0","C");
//      $pdf->Cell(17,10,"CC3","1","0","C");
//      $pdf->Cell(17,10,"CN3","1","1","C");
//      $i++;
// }
// }
// else{
// echo "lỗi";
// }
// }

$pdf->Output();

?>
<!-- SELECT tre.T_HOTEN,chi_so_phat_trien.CHIEUCAO,chi_so_phat_trien.CANNANG,
chi_so_phat_trien2.CHIEUCAO2,chi_so_phat_trien2.CANNANG2,
chi_so_phat_trien3.CHIEUCAO3,chi_so_phat_trien3.CANNANG3

FROM lop INNER JOIN chi_so_phat_trien
ON lop.L_ID=chi_so_phat_trien.L_ID
INNER JOIN tre
on tre.T_ID=chi_so_phat_trien.T_ID
INNER JOIN chi_so_phat_trien2
on tre.T_ID=chi_so_phat_trien2.T_ID
INNER JOIN chi_so_phat_trien3
on tre.T_ID=chi_so_phat_trien3.T_ID
WHERE chi_so_phat_trien.L_ID=7 -->