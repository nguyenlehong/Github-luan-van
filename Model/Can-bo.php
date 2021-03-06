<?php
function  insert_can_bo($hoten,$ngaysinh,$phai,$sdt,$email,$diachi){
	$sql="insert into can_bo(CB_HOTEN,CB_NGAYSINH,CB_PHAI,CB_SDT,CB_EMAIL,CB_DIACHI)values('$hoten','$ngaysinh','$phai','$sdt','$email','$diachi')";
	pdo_execute($sql);
}
function  cap_nhat_thong_tin_can_bo($id,$sdt,$email,$diachi){
	$sql="update can_bo set CB_SDT='".$sdt."',CB_EMAIL='".$email."',CB_DIACHI='".$diachi."' where CB_ID=".$id;
	pdo_execute($sql);
	
}
function update_can_bo_phan_cong($PC_ID,$tencanbo){
	$sql="update phan_cong set CB_ID='".$tencanbo."' where PC_ID=".$PC_ID;
	pdo_execute($sql);
}
function load_all_can_bo(){
    $sql="select * from can_bo order by CB_ID desc";
	$list=pdo_query($sql);
	return $list; 
}
function load_1_can_bo($CB_ID){
    $sql="select * from can_bo where CB_ID=".$CB_ID;
	$cb=pdo_query_one($sql);
	return $cb; 
}
function delete_can_bo($CB_ID){
	$sql="delete from can_bo where CB_ID=".$CB_ID;
	pdo_execute($sql);
}
function  insert_nhiem_vu($tennv,$motanv){
    $sql="insert into nhiem_vu(NV_TEN,NV_MOTA)values('$tennv','$motanv')";
    pdo_execute($sql);
}
function delete_nhiem_vu($NV_ID){
	$sql="delete from nhiem_vu where NV_ID=".$NV_ID;
	pdo_execute($sql);
}

function load_all_nhiem_vu(){
	$sql="select * from nhiem_vu order by NV_ID desc";
	$list=pdo_query($sql);
	return $list;
}

// test xoa bỏ cột năm học
function insert_phan_cong($L_ID,$NV_ID,$CB_ID){
	$sql="insert into phan_cong(L_ID,NV_ID,CB_ID)values('$L_ID','$NV_ID','$CB_ID')";
    pdo_execute($sql);
}
// function insert_phan_cong($NAMHOC,$L_ID,$NV_ID,$CB_ID){
// 	$sql="insert into phan_cong(NAMHOC,L_ID,NV_ID,CB_ID)values('$NAMHOC','$L_ID','$NV_ID','$CB_ID')";
//     pdo_execute($sql);
// }
function load_1_phan_cong($PC_ID){
	$sql="SELECT *
	from nam_hoc INNER JOIN lop
	on nam_hoc.NAMHOC = lop.NAMHOC
	INNER JOIN phan_cong pc 
		on lop.L_ID = pc.L_ID
		INNER JOIN nhiem_vu 
		on nhiem_vu.NV_ID=pc.NV_ID
		INNER JOIN can_bo 
		on can_bo.CB_ID =pc.CB_ID
		where PC_ID=".$PC_ID;
	$pc=pdo_query_one($sql);
        return $pc; 

	
}
function load_all_phan_cong_hien_tai(){
	$sql="SELECT *
	from nam_hoc INNER JOIN lop
	on nam_hoc.NAMHOC = lop.NAMHOC
	INNER JOIN phan_cong pc 
		on lop.L_ID = pc.L_ID
		INNER JOIN nhiem_vu 
		on nhiem_vu.NV_ID=pc.NV_ID
		INNER JOIN can_bo 
		on can_bo.CB_ID =pc.CB_ID 
		where nam_hoc.TRANGTHAI='danghoatdong' order by pc.L_ID desc
	";
	$list=pdo_query($sql);
	return $list;
}
function load_all_phan_cong(){
	$sql="SELECT  *
	from nam_hoc INNER JOIN lop
	ON nam_hoc.NAMHOC=lop.NAMHOC
		INNER JOIN phan_cong pc 
		on lop.L_ID = pc.L_ID
		INNER JOIN nhiem_vu 
		on nhiem_vu.NV_ID=pc.NV_ID
		INNER JOIN can_bo 
		on can_bo.CB_ID =pc.CB_ID ";
	$list=pdo_query($sql);
	return $list;
}
function load_all_phan_cong_tim($id){
	$sql="SELECT *
	FROM lop  INNER JOIN phan_cong pc 
	on lop.L_ID = pc.L_ID
	INNER JOIN nam_hoc
	on nam_hoc.NAMHOC = lop.NAMHOC
	INNER JOIN nhiem_vu 
	on nhiem_vu.NV_ID=pc.NV_ID
	INNER JOIN can_bo 
	on can_bo.CB_ID = pc.CB_ID WHERE 1";
	if($id!=""){
		$sql.=" and can_bo.CB_ID ='".$id."'";	
	}
	// $sql.=" order by L_ID desc";
	
	$list=pdo_query($sql);
	return $list; 
}
// function load_all_phan_cong(){
// 	$sql="SELECT  can_bo.CB_ID,can_bo.CB_HOTEN,nhiem_vu.NV_TEN, lop.L_TEN,nam_hoc.NAMHOC,PC_ID
// 	FROM nam_hoc INNER JOIN phan_cong pc 
// 	on nam_hoc.NAMHOC = pc.NAMHOC
// 	INNER JOIN lop 
// 	on lop.L_ID = pc.L_ID
// 	INNER JOIN nhiem_vu 
// 	on nhiem_vu.NV_ID=pc.NV_ID
// 	INNER JOIN can_bo 
// 	on can_bo.CB_ID =pc.CB_ID";
// 	$list=pdo_query($sql);
// 	return $list;
// }
function delete_phan_cong($PC_ID){
	$sql="delete from phan_cong where PC_ID=".$PC_ID;
	pdo_execute($sql);
}
function delete_khoan_thu($KT_ID){
	$sql="delete from khoan_thu where KT_ID=".$KT_ID;
	pdo_execute($sql);
}
function load_tre_chi_so_theo_lop(){
	$sql="SELECT tre.T_HOTEN,thang,chi_so_phat_trien.CHIEUCAO,chi_so_phat_trien.CANNANG,lop.L_TEN
	FROM tre INNER JOIN lop_tre
	on tre.T_ID =lop_tre.T_ID
	INNER JOIN chi_so_phat_trien
	ON chi_so_phat_trien.T_ID=lop_tre.T_ID
	INNER JOIN lop
	ON lop.L_ID=lop_tre.L_ID
	WHERE lop.L_ID=8";
	$list=pdo_query($sql);
	return $list;
}
?>