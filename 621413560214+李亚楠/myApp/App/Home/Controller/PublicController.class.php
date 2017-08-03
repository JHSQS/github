<?php
/**
 * User: lyn
 * Date: 2016/4/10 20:16
 */
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function verify($id=1){
        $config =  array(
'fontSize'    =>    18,    // 验证码字体大小
'length'     =>      4,     // 验证码位数
'imageH'     =>     35, // 关闭验证码杂点
//'imageW'     =>     75,
 'codeSet'   =>   '0123456789',
'useNoise'   =>     false, // 关闭验证码杂点
);
$Verify = new \Think\Verify($config);
        ob_clean();
$Verify->entry($id);
}



}











?>