<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\View;

class Index extends Controller
{
    protected $view;
    /**
     * Index constructor.  自动加载模板渲染
     */
    public function __construct()
    {
        $view = new View();
        $this->view = $view;
    }
    /**
     * @index  首页函数
     * @return string
     */
    public function index()
    {
        $this->view->assign('name','首页');
        return $this->view->fetch();
    }
    /**
     * @export   导出函数
     */
    public function export(){
        $data = Db::name('news_content')->field("specialid,title,description,url")->select();
        PHPExecl_export("news_content.xls",$data);
    }
    /**
     * @import  导入函数
     */
    public function import(){
        $res = '';
        $fileUrl = '20170420/1b70a83d870b1e0d226ab1f98c00b8a8.csv';
        $data = PHPExecl_import($fileUrl);
        foreach ($data as $items){
           $data = array(
               'id' => null,
               'specialid' => $items[0],
               'title'  =>   $items[1],
               'description' => $items[2],
               'url'       =>    $items[3]
           );
           //单条插入数据
           $res = Db::name('news_content')->insert($data);
        }
        //判断返回值
        if (is_int($res)){
            $this->success('导入成功！！',url('index'),2);
        }else{
            $this->error('导入失败！！',url('index'),2);
        }
    }
    /**
     * @upload   上传函数
     */
    public function upload(){
        //实例化请求
        $request = Request::instance();
        //获取post请求,返回值是数组
        $params = $request->post();
        $img = $params['file_hidden']['img'];
        $file = $params['file_hidden']['file'];
        $csv = $params['file_hidden']['csv'];
        $file_img = uploadFile($img);
        $file_file = uploadFile($file);
        $file_csv = uploadFile($csv);
        print_r($file_csv);
//        if ($file_img){
//            $this->success("上传成功！",url("index"),2);
//        }else{
//            $this->error("上传失败！",url("index"),2);
//        }
//        if ($file_file){
//            $this->success("上传成功！",url("index"),2);
//        }else{
//            $this->error("上传失败！",url("index"),2);
//        }
//        if ($file_csv){
//            $this->success("上传成功！",url("index"),2);
//        }else{
//            $this->error("上传失败！",url("index"),2);
//        }
    }
}
