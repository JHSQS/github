<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(isset($_COOKIE['username'])){
        $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Login/login'));
        }
		$music=M('music')->select();
		 $this->assign('music',$music);
        $this->display();
    }
    public function feng(){
        if(isset($_COOKIE['username'])){
            $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Index/login'));
        }
		$music=M('music')->select();
        $this->assign('music',$music)->display();
	
    }

    public function friend(){
        if(isset($_COOKIE['username'])){
            $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Index/login'));
            $this->error('亲，请先登录吧',U('Login/login'));
        }
		$count=M('User')->count();
	$page=new \Think\Page($count,5);
	$page -> setConfig('first','首页');
	$page -> setConfig('last','共%TOTAL_PAGE%页');
	$page -> setConfig('prev','上一页');
	$page -> setConfig('next','下一页');
	$page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
	$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
	$limit=$page->firstRow .',' .$page->listRows;
	$friend=M('User')->order('reg_time DESC')->limit($limit)->select();
	$this->page=$page->show();
	$this->assign('friend',$friend)->display();
    }

    public function mood(){
        if(isset($_COOKIE['username'])){
            $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Index/login'));
            $this->error('亲，请先登录吧',U('Login/login'));
        }
        $mood=M('Mood')->select();
        $this->assign('mood',$mood)->display();
    }
    //异步发布处理
    public function checkmood(){
        if(!IS_AJAX){
            E('页面不存在！！！');
                   }

        $data=array(
            'username'=>I('post.username'),
            'content'=>I('post.content'),
            'time'=>time()
        );


        if($id = M('Mood')->data($data)->add()){
            $data['id']=$id;
            $data['content']=replace_phiz($data['content']);
            $data['time']=date('y-m-d H:i',$data['time']);
            $data['status']=1;
            $this->ajaxReturn($data,'json');
        }
        else{
             $this->ajaxReturn(array(status=>0),'json');
        }
    }
    public function delia(){
        if(isset($_COOKIE['username'])){
            $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Login/login'));
        }

        $count=M('Delia')->count();
        $page=new \Think\Page($count,2);
        $page -> setConfig('first','首页');
        $page -> setConfig('last','共%TOTAL_PAGE%页');
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $limit=$page->firstRow .',' .$page->listRows;
        $delia=M('Delia')->limit($limit)->select();
        $this->page=$page->show();
        $this->assign('delia',$delia)->display();
    }
	public function search(){
		if(!$_POST){
            E('页面不存在！！！');
                   }
        if(isset($_COOKIE['username'])){
            $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Login/login'));
        }
		$keyword = I('post.search');
		$delias=M('Delia');  
		$map['title|content']  = array('like','%'.$keyword.'%');  
		// 把查询条件传入查询方法  
		if($dels=$delias->where($map)->select())  
		 {  
				   $this->assign('data',$dels);
		 }
		 else{  
				  $this->error('无相关记录');
	 }
	 $this->display();
	}

    public function delialist(){

        if(isset($_COOKIE['username'])){
            $this->assign('user',"欢迎您！"."{$_COOKIE['username']}");
            $this->assign('imgUrl',$_COOKIE['face']);
            $this->assign('checklogin',"退出");
            $this->assign('src',U('Login/loginout'));
        }
        else{
            $this->assign('checklogin',"登录");
            $this->assign('src',U('Login/login'));
        }
        $id= $_GET['id'];
        $delias=M('Delia');
        // 把查询条件传入查询方法
        if($dels=$delias->select($id))
        {
            $this->assign('data',$dels);
        }
        $this->display();


    }
	public function checkpinglun(){
		
		 if(isset($_COOKIE['username'])){
				   if(!$_POST){
					E('页面不存在');
				}
				$name="{$_COOKIE['username']}";
				$data = array(
				'name'=>$name,
			'content'=>I('post.pinglun'),
            ping_time=>time()
        );
        if(M('Ping')->data($data)->add()){
               _back('评论成功！');
        }else{
                _back('评论失败！');
        }
        		
        }
        else{
            $this->error('亲，请先登录吧',U('Login/login'));
        }
		
		
		
	}
	
	
	
	
	
}