<?php
function kiem_tra_dang_nhap($id,$matkhau){
	$sql="select * from can_bo where CB_ID='".$id."' and CB_MATKHAU='".$matkhau."' ";
	$tk=pdo_query_one($sql);
	return $tk;
}
?>