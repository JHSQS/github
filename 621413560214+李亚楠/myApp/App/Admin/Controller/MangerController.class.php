<?php
/**
 * User: lyn
 * Date: 2016/4/20 13:57
 */
namespace Admin\Controller;
use Think\Controller;
class MangerController extends Controller{
    public function index(){
        if(!isset($_SESSION['username'])){

           $this->error('请先登录！');
        }

        $this->display();
    }
    public function welcome(){
        $this->display();
    }

    public  function  manger_mood(){
        $count=M('Mood')->count();
        $page=new \Think\Page($count,5);
        $page -> setConfig('first','首页');
        $page -> setConfig('last','共%TOTAL_PAGE%页');
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $limit=$page->firstRow .',' .$page->listRows;
        $mood=M('Mood')->limit($limit)->select();
        $this->page=$page->show();
        $this->assign('mood',$mood)->display();
    }

    public function deletemood(){
        $id = I('id','','intval');

        if( M('Mood')->delete($id)){
            $this->success('删除成功！',U('Manger/manger_mood'));
        }
        else{

            $this->error('删除失败！');
        }
    }
    public function deletemusic(){
        $id = I('id','','intval');

        if( M('Music')->delete($id)){
            $this->success('删除成功！',U('Manger/manger_music'));
        }
        else{

            $this->error('删除失败！');
        }
    }




public  function  manger_friend(){
    $count=M('User')->count();
    $page=new \Think\Page($count,5);
    $page -> setConfig('first','首页');
    $page -> setConfig('last','共%TOTAL_PAGE%页');
    $page -> setConfig('prev','上一页');
    $page -> setConfig('next','下一页');
    $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
    $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
    $limit=$page->firstRow .',' .$page->listRows;
    $friend=M('User')->limit($limit)->select();
    $this->page=$page->show();
    $this->assign('friend',$friend)->display();
}
    public function checkaddfr(){
        if(!$_POST){
            E('页面不存在！');
        }
        $data = array(
            'fr_name'=>I('post.username'),
            'sex'=> I('post.sex'),
            'fr_age'=> I('post.age')
        );
        if(M('Friend')->data($data)->add()){
            $this->success('添加好友成功！',U('Manger/manger_friend'),2);

        }else{
            $this->error('添加好友失败！');
        }

    }


    public function deletefriend(){
         $id = I('id','','intval');

       if( M('User')->delete($id)){
            $this->success('删除成功！',U('Manger/manger_friend'));
       }
       else{

            $this->error('删除失败！');
       }
    }


public function manger_delia(){
    $count=M('Delia')->count();
    $page=new \Think\Page($count,3);
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
    public function manger_music(){
        $count=M('Music')->count();
        $page=new \Think\Page($count,6);
        $page -> setConfig('first','首页');
        $page -> setConfig('last','共%TOTAL_PAGE%页');
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $limit=$page->firstRow .',' .$page->listRows;
        $music=M('Music')->limit($limit)->select();
        $this->page=$page->show();
        $this->assign('music',$music)->display();
    }
public function cdelia(){
    $this->display();

}
public function cmusic(){

    $this->display();
}
    public function mdelia(){
        $id = I('id','','intval');
        $delias=M('Delia');
        // 把查询条件传入查询方法
        if($dels=$delias->select($id))
        {
            $this->assign('data',$dels);
        }
        $this->display();

    }
    public function modfiy()
    {
        $id = I('id','','intval');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/'; // 设置附件上传根目录
        $upload->savePath = '/Images/delia/'; // 设置附件上传（子）目录
        //$upload->saveName = '';
        $upload->autoSub = true;
        $upload->subName = '';
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            foreach ($info as $file) {
                $url = "/myApp/Public" . $file['savepath'] . $file['savename'];
            }
            $data = array(
                'title' => I('post.title'),
                'content' => I('post.content'),
                'pic' => $url,
                'lo_time' => time()
            );

            if (M('Delia')->where(array('id' => $id))->save($data)) {

                $this->success('修改成功！', U('Manger/manger_delia'));

            }else{
                $this->error('修改失败！');
            }


        }
    }
public function upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/'; // 设置附件上传根目录
    $upload->savePath  =     '/Images/delia/'; // 设置附件上传（子）目录
    //$upload->saveName = '';
    $upload->autoSub = true;
    $upload->subName ='';
    // 上传文件
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else {// 上传成功
        foreach ($info as $file) {
           $url="/myApp/Public".$file['savepath'] . $file['savename'];
        }
        $data=array(
            'title'=>I('post.title'),
            'content'=>I('post.content'),
            'pic'=>$url,
            'lo_time'=>time()
        );
        if(M('Delia')->data($data)->add()){

            $this->success('发布成功！',U('Manger/cdelia'));

        }

    }

}
    public function uploadmusic(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './avatar/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        //$upload->saveName = '';
        $upload->autoSub = true;
        $upload->subName ='';
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else {// 上传成功
            foreach ($info as $file) {
                $url="/myApp/Public".$file['savepath'] . $file['savename'];
            }
            $data=array(
                'mus_name'=>I('post.mus_name'),
                'actor'=>I('post.actor'),
                'mus_time'=>I('post.mus_time'),
                'adress'=>I('post.adress'),
                'pic'=>$url,
                'time'=>time()
            );
            if(M('Music')->data($data)->add()){

                $this->success('发布成功！',U('Manger/manger_music'));

            }

        }

    }




}