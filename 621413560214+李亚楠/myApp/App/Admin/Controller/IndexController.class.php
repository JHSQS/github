<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
		$this->display();
	}

	public function checklogin(){
		if(!$_POST){
			E('页面不存在');
		}
		$data = array(
			'username'=>I('post.username'),
			'password'=>sha1(I('post.password'))
		);
		// 检查验证码
		$verify = I('post.code','');
		if(!check_verify($verify)){
			$this->error("亲，验证码输错了哦！");
		}


		$where=array();
		$where['username']= $data['username'];
		$where['password']= $data['password'];
		$m=M('Root');
		$info = $m->where($where)->find();

		if(!empty($info)){
			if($info['r_password'] ==  $data['password']){
				session('username',$info['r_name']);
				cookie('login',$info['r_login_time'],time()+3600*24);
				$this->success("登录成功！",U('Manger/index'));
			}else{
				$this->error('密码出错，请重新输入！');
			}
		}else{
			$this->error('用户名不存在！');
		}
	}
	public function loginout(){
		session(null);
		cookie('login',null);
		$this->success('您已经成功退出，欢迎您的下次登录！',U('Index/index'));
	}



}