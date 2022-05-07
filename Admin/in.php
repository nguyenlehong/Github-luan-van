<?php
require "../tfpdf/tfpdf.php";
            $pdf = new tFPDF();
            $pdf->AddPage();
            $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
            $pdf->SetFont('DejaVu','',14);




// test
// $con = new PDO("mysql: host=localhost; dbname=luanvan", "root","");
// if(isset($_GET['L_ID'])){
//     $L_ID = $_GET['L_ID'];
//     $query = "SELECT *
//     FROM lop INNER JOIN lop_tre
//     ON lop.L_ID=lop_tre.L_ID
//     INNER JOIN tre
//     ON tre.T_ID=lop_tre.T_ID WHERE lop.L_ID='$L_ID' limit 1";
//     $result = $con->prepare($query);
//     $result->execute();
//     $i = 1;
//     while($result->rowCount()!=0)
//     {
//     if ($tre = $result->fetch())
//     {
//         // $pdf->Cell(200,20,"Danh sách trẻ ".$tre["L_TEN"]." " ,"0","1","C");
//         echo "".$tre["L_TEN"]."";
//     }
//     }
// }
// test


            
$pdf->SetTitle("In danh sách trẻ  ");
$pdf->Cell(200,20,"Danh sách trẻ " ,"0","1","C");

//table
$pdf->setLeftMargin(10);
$pdf->Cell(10,10,"STT","1","0","C");
$pdf->Cell(60,10,"Họ và tên","1","0","C");
$pdf->Cell(30,10,"Ngày sinh","1","0","C");
$pdf->Cell(40,10,"cân nặng","1","0","C");
$pdf->Cell(40,10,"Chiều cao","1","1","C");

$con = new PDO("mysql: host=localhost; dbname=luanvan", "root","");
if(isset($_GET['L_ID']))
{
// $L_ID = $_GET['L_ID'];
// $query = "SELECT T_HOTEN,L_TEn
// FROM lop INNER JOIN lop_tre
// ON lop.L_ID=lop_tre.L_ID
// INNER JOIN tre
// ON tre.T_ID=lop_tre.T_ID WHERE lop.L_ID='$L_ID'";
// $result = $con->prepare($query);
// $result->execute();
// $i = 1;
$L_ID = $_GET['L_ID'];
$query = "SELECT *
FROM lop INNER JOIN lop_tre
ON lop.L_ID=lop_tre.L_ID
INNER JOIN tre
ON tre.T_ID=lop_tre.T_ID WHERE lop.L_ID='$L_ID'";
$result = $con->prepare($query);
$result->execute();
$i = 1;
if($result->rowCount()!=0)
{
while ($tre = $result->fetch())
{
    $time = strtotime($tre['T_NGAYSINH']);
    $pdf->Cell(10, 10,"$i" , "1","0","C");
    $pdf->Cell(60, 10, $tre['T_HOTEN'], "1","0","L");
    $pdf->Cell(30, 10, date("d/m/Y",$time), "1","0","L");
    $pdf->Cell(40, 10,"", 1,"0","C");
    $pdf->Cell(40, 10,"", "1","1", "C");

$i++;
}
}
else{
echo "lỗi";
}

}

$pdf->Output();




?>