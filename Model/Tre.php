<?php
    function insert_tre($ten,$ngaysinh,$phai,$diachi,$hotencha,$sdtcha,$nncha,$hotenme,$sdtme,$nnme){
        $sql="insert into tre(T_HOTEN,T_NGAYSINH,T_PHAI,T_DIACHI,T_HTCHA,T_SDTCHA,T_NNCHA,T_HTME,T_SDTME,T_NNME)
        values('$ten','$ngaysinh','$phai','$diachi','$hotencha','$sdtcha','$nncha','$hotenme','$sdtme','$nnme')";
	    pdo_execute($sql);
    }



    function load_1_tre(){
        $sql="select * from tre order by T_ID desc limit 1";
        $list=pdo_query($sql);
        return $list; 
    }
    function load_1_tre_chi_so($T_ID){
        $sql="select * from tre where T_ID=".$T_ID;
        $list=pdo_query_one($sql);
        return $list; 
    }
    function insert_tre_chon_lop($idlop,$idtre){
        $sql="insert into lop_tre(L_ID,T_ID) values('$idlop','$idtre')";
        pdo_execute($sql);

    }
    function insert_chi_so_tre($T_ID,$THANG,$chieucao,$cannang){
        $sql="insert into chi_so_phat_trien(T_ID,THANG,CHIEUCAO,CANNANG) values('$T_ID','$THANG','$chieucao','$cannang')";
        pdo_execute($sql);
    }


    function load_all_tre2(){
        $sql=" SELECT  lop.L_TEN,tre.T_HOTEN,tre.T_NGAYSINH,tre.T_PHAI,tre.T_SDTCHA,tre.T_SDTME,tre.T_ID
        FROM lop INNER JOIN lop_tre 
        on lop.L_ID = lop_tre.L_ID
        INNER JOIN tre 
        on tre.T_ID = lop_tre.T_ID";        
        $list=pdo_query($sql);
        return $list;
    }
    function load_all_tre(){
        $sql="select * from tre order by T_ID desc";
        $list=pdo_query($sql);
        return $list; 
    }
?>