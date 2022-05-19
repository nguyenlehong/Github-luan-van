<?php
function kiem_tra_dang_nhap($id,$matkhau){
	$sql="select * from can_bo where CB_ID='".$id."' and CB_MATKHAU='".$matkhau."' ";
	$tk=pdo_query_one($sql);
	return $tk;
}
function kiem_tra_dang_nhap_admin($id,$matkhau){
	$sql="select * from tai_khoan_admin where ad_TK='".$id."' and ad_MK='".$matkhau."' ";
	$tk=pdo_query_one($sql);
	return $tk;
}
function kiem_tra_dang_nhap_qtv($id,$matkhau){
	$sql="select * from tai_khoan_qtv where taikhoan='".$id."' and matkhau='".$matkhau."' ";
	$tk=pdo_query_one($sql);
	return $tk;
}
function doi_mat_khau($id,$mkmoi){
	$sql="update can_bo set CB_MATKHAU='".$mkmoi."' where CB_ID=".$id;
	pdo_execute($sql);
}
?>