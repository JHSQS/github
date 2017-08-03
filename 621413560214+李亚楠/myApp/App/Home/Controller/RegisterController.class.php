<?php
/**
 * User: lyn
 * Date: 2016/3/12 18:57
 */
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function register(){
        $number=range(11,26);
//        dump($number);
//        die;
        $this->assign(num,$number);
        $this->display();
    }
    public function checkregister(){
        if(!$_POST){
            E('页面不存在');
        }
        $data = array(
            'username'=>I('post.username'),
            'password'=>sha1(I('post.password')),
            'sex'=> I('post.sex'),
            'face'=> I('post.face'),
            reg_time=>time()
        );
        // 检查验证码
        $verify = I('post.code','');
            if(!check_verify($verify)){
            $this->error("亲，验证码输错了哦！");
        }

        $info=$data['username'];
      if(M('user')->where("username='.$info.'")->select()){
            $this->error("这个名字已经被人注册了，请换个名字吧！！！");
        }else{
        if(M('User')->data($data)->add()){
               $this->success("恭喜您，注册成功，登录试试吧！！！",__APP__,3);
        }else{
                $this->error("注册失败，请重新注册！！！");
        }
        }
    }

}





?>