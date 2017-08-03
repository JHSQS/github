<?php
/**
 * User: lyn
 * Date: 2016/4/19 21:13
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

/**
 * 限制字符串的长度
 * @param unknown $_string
 * @return string
 */
function _title($_string){
    if (mb_strlen($_string,'utf-8')>14){
        $_string=mb_substr($_string,1,14,'utf-8').'...';
    }
    return $_string;


}

function _back($_info){
     echo "<script>alert('".$_info."');history.back();</script>";
     exit();    
 } 




