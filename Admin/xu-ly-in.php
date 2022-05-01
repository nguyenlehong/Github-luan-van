<?php
          require "../tfpdf/tfpdf.php";       
          $pdf = new tFPDF();
          $pdf->AddPage();
          $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
          $pdf->SetFont('DejaVu','',12);         
if(isset($_GET['b'])){
    $b=$_GET['b'];
    switch ($b){
        case 'in-can-bo':             

            $pdf->SetTitle("In danh sách cán bộ");      
            $pdf->Cell(200,10,"Danh sách Cán bộ" ,"0","1","C");      
            $pdf->SetFont('DejaVu','',11);                    
        //table
            $pdf->setLeftMargin(10);
            $pdf->Cell(10,10,"STT","1","0","C");
            $pdf->Cell(40,10,"Họ và tên","1","0","C");
            $pdf->Cell(25,10,"Ngày sinh","1","0","C");    
            $pdf->Cell(15,10,"Giới tính","1","0","C");
            $pdf->Cell(20,10,"SĐT","1","0","C");
            $pdf->Cell(35,10,"Email","1","0","C");
            $pdf->Cell(50,10,"Địa chỉ","1","1","C");   

            $con = new PDO("mysql: host=localhost; dbname=luanvan", "root","");
            $query = "SELECT * FROM can_bo";
            $result = $con->prepare($query);
            $result->execute();
            $i = 1;
            if($result->rowCount()!=0)
            {
            while ($cb = $result->fetch())
            {                
            $pdf->Cell(10,10,$i,"1","0","C");
            $pdf->Cell(40,10,$cb['CB_HOTEN'],"1","0","L");
            $pdf->Cell(25,10,$cb['CB_NGAYSINH'],"1","0","C");    
            $pdf->Cell(15,10,$cb['CB_PHAI'],"1","0","C");
            $pdf->Cell(20,10,$cb['CB_SDT'],"1","0","L");
            $pdf->Cell(35,10,$cb['CB_EMAIL'],"1","0","L");
            $pdf->Cell(50,10,$cb['CB_DIACHI'],"1","1","L"); 
            $i++;


            }
            
            $pdf->Output();         
            break;
    }
}
}
?>