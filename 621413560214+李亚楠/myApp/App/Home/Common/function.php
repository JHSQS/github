<?php
/**
 * User: lyn
 * Date: 2016/4/10 20:14
 */
function check_verify($code, $id = 1){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
function check_sex($sex){
	if($sex==1){
		$sex="男";
	}else{
		$sex="女";
	}
	return $sex;
}
function _back($_info){
	echo "<script>alert('".$_info."');history.back();</script>";
	exit();
}


?>