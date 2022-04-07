<?php
    function insert_tre($ten,$ngaysinh,$phai,$diachi,$hotencha,$sdtcha,$nncha,$hotenme,$sdtme,$nnme){
        $sql="insert into tre(T_HOTEN,T_NGAYSINH,T_PHAI,T_DIACHI,T_HTCHA,T_SDTCHA,T_NNCHA,T_HTME,T_SDTME,T_NNME)
        values('$ten','$ngaysinh','$phai','$diachi','$hotencha','$sdtcha','$nncha','$hotenme','$sdtme','$nnme')";
	    pdo_execute($sql);
    }



    function insert_lop_tre($lop,$id){
        $sql="insert into lop_tre(L_ID,T_ID) values('$lop','$id')";
        pdo_execute($sql);
    }
?>