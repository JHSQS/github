<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\View;
class Uploads extends Controller
{
    // 自动加载模板渲染方法
    protected $view;
    public function __construct()
    {
        $view = new View();
        $this->view = $view;
    }
    public function index(){
        $arr = Db::name('news_content')->select();
        $this->view->assign('name',$arr);
        return $this->view->fetch();
    }
    public function import(){
        //实例化请求
        $request = Request::instance();
        //获取post请求,返回值是数组
        $params = $request->post();
        $type = $params['file_hidden']['csv'];
        $file_csv = uploadFile($type);
        if ($file_csv){
            $res = '';
            $data = PHPExecl_import($file_csv[0]);
            foreach ($data as $items){
                $data = array(
                    'id' => null,
                    'specialid' => $items[0],
                    'title'  =>   $items[1],
                    'description' => "{$items[2]}",
                    'url'       =>    $items[3]
                );
                //单条插入数据
                $res = Db::name('news_content')->insert($data);
            }
            //判断返回值
            if (is_int($res)){
                $this->success('导入成功！！',url('index'),2);
                exit;
            }else{
                $this->error('导入失败！！',url('index'),2);
                exit;
            }
        }
    }
}
?>
