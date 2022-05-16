<?php
    function insert_tre($ten,$ngaysinh,$phai,$diachi,$hotencha,$sdtcha,$nncha,$hotenme,$sdtme,$nnme){
        $sql="insert into tre(T_HOTEN,T_NGAYSINH,T_PHAI,T_DIACHI,T_HTCHA,T_SDTCHA,T_NNCHA,T_HTME,T_SDTME,T_NNME)
        values('$ten','$ngaysinh','$phai','$diachi','$hotencha','$sdtcha','$nncha','$hotenme','$sdtme','$nnme')";
	    pdo_execute($sql);
    }
    function delete_tre($T_ID){
        $sql="delete from Tre where T_ID=".$T_ID;
        pdo_execute($sql);
    }

    function cap_nhat_1_tre($T_ID){
        $sql="select * from tre where T_ID=".$T_ID;
        $tre=pdo_query_one($sql);
        return $tre; 
    }
    function cap_nhat_thong_tin_tre($id,$ten,$ngaysinh,$phai,$diachi,$hotencha,$sdtcha,$nncha,$hotenme,$sdtme,$nnme){
        $sql="update tre set T_HOTEN='".$ten."',T_NGAYSINH='".$ngaysinh."',T_PHAI='".$phai."'
        ,T_DIACHI='".$diachi."',T_HTCHA='".$hotencha."',T_SDTCHA='".$sdtcha."',T_NNCHA='".$nncha."'
       ,T_HTME='".$hotenme."',T_SDTME='".$sdtme."',T_NNME='".$nnme."'
        where T_ID=".$id;
	    pdo_execute($sql);
    }

    function load_1_tre(){
        $sql="select * from tre order by T_ID desc limit 1";
        $list=pdo_query($sql);
        return $list; 
    }
    function load_1_tre_len_lop($T_ID){
        $sql="select * from tre where T_ID=".$T_ID;
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
    // function insert_tre_chi_so($idlop,$idtre){
    //     $sql="insert into chi_so_phat_trien(L_ID,T_ID) values('$idlop','$idtre')";
    //     pdo_execute($sql);
    // }
    // function insert_tre_chi_so2($idlop,$idtre){
    //     $sql="insert into chi_so_phat_trien2(L_ID,T_ID) values('$idlop','$idtre')";
    //     pdo_execute($sql);
    // }function insert_tre_chi_so3($idlop,$idtre){
    //     $sql="insert into chi_so_phat_trien3(L_ID,T_ID) values('$idlop','$idtre')";
    //     pdo_execute($sql);
    // }
// cap nhat chi so tre v1

function insert_tre_cs_dau_hk1($idlop,$idtre){
    $sql="insert into chi_so_dau_hk1(L_ID,T_ID) values('$idlop','$idtre')";
    pdo_execute($sql);
}
function insert_tre_cs_cuoi_hk1($idlop,$idtre){
    $sql="insert into chi_so_cuoi_hk1(L_ID,T_ID) values('$idlop','$idtre')";
    pdo_execute($sql);
}
function insert_tre_cs_dau_hk2($idlop,$idtre){
    $sql="insert into chi_so_dau_hk2(L_ID,T_ID) values('$idlop','$idtre')";
    pdo_execute($sql);
}
function insert_tre_cs_cuoi_hk2($idlop,$idtre){
    $sql="insert into chi_so_cuoi_hk2(L_ID,T_ID) values('$idlop','$idtre')";
    pdo_execute($sql);
}
function insert_tre_phieu_thu($idlop,$idtre){
    $sql="insert into phieu_thu(L_ID,T_ID) values('$idlop','$idtre')";
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