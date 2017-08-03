<?php
/**
 * User: lyn
 * Date: 2016/3/18 14:08
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    public  function checklogin(){
        if(!$_POST){
            E('页面不存在');
        }
        $clean=array();
        $clean['username']=I('post.username');
        $clean['password']=sha1(I('post.password'));
       $m=M('user');
        $where=array();
        $where['username']= $clean['username'];
        $where['password']= $clean['password'];
        $info = $m->where($where)->find();
        if(!empty($info)){
            if($info['password'] ==  $clean['password']){
                cookie('userid',$info['id'],time()+3600*24);
                cookie('username',$info['username'],time()+3600*24);
                cookie('lastlogintime',time(),time()+3600*24);
                cookie('face',$info['face'],time()+3600*24);
                $this->success("登录成功！",__APP__);
            }else{
                $this->error('密码出错，请重新输入！');
            }
        }else{
            $this->error('用户名不存在！');
        }
    }
    public function loginout(){
        cookie('username',null);
        cookie('lastlogintime',null);
        $this->success('您已经成功退出，欢迎您的下次登录！',__APP__);
    }


}
