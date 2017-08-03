<?php
// 公共函数库
/**
 * @function uploadFile 上传函数
 * @param $name  上传文件类型
 * @return mixed   数组
 */
function uploadFile($name){
    switch ($name){
        //上传图片
        case "imges":
        case "imge":
        case "img":
            //获取文件对象
            $file = request()->file($name);
            if ($file) {
                //加载存放路径和验证
                @$file_info = $file->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'img')->validate(['size' => 15678, 'ext' => 'jpg,png,gif']);
            }
            if(@$file_info){
                //返回文件信息
                $arr[] = $file_info->getSaveName();
                $arr[] = $file_info->getFileName();
                return $arr;
            }
            break;
        //上传文件
        case "file":
            //获取文件对象
            $file = request()->file($name);
            if ($file){
                //加载存放路径和验证
                @$file_info = $file->move(ROOT_PATH . 'public' . DS . 'uploads' .DS . 'file');
            }
            if (@$file_info){
                //返回文件信息
                $arr[] = $file_info->getSaveName();
                $arr[] = $file_info->getFileName();
                return $arr;
            }
            break;
        //上传表格
        case "xls":
        case "xlsx":
        case "csv":
            //获取文件对象
            $file = request()->file($name);
            if ($file){
                //加载存放路径和验证
                @$file_info = $file->move(ROOT_PATH . 'public' . DS . 'uploads' .DS . 'execl')->validate(['size'=>185678,'ext'=>'xls,xlsx,execl']);
            }
            if (@$file_info){
                //返回文件信息
                $arr[] = $file_info->getSaveName();
                $arr[] = $file_info->getFileName();
                return $arr;
            }
            break;
        //默认不上传
        default:
            break;
    }
}
/**
 * @function  PHPExecl_import   PHPExecl导入csv/xls/xlsx文件
 * @param $fileUrl     导入文件路径
 * @return array       二维数组
 */
function PHPExecl_import($fileUrl){
    //获取文件类型
    $type = strtolower( pathinfo(ROOT_PATH . 'public' . DS . 'uploads/execl/'.$fileUrl, PATHINFO_EXTENSION) );
    //读取文件，如果是xlsx/xls 直接读，csv创建对象再读取
    if( $type=='xlsx'||$type=='xls' )
        $objPHPExcel = \PHPExcel_IOFactory::load(ROOT_PATH . 'public' . DS . 'uploads/execl/'.$fileUrl);
    elseif($type=='csv') {
        $objReader = \PHPExcel_IOFactory::createReader('CSV')->setDelimiter(',')->setInputEncoding('utf-8')->setEnclosure('"')->setSheetIndex(0);
        $objPHPExcel = $objReader->load(ROOT_PATH . 'public' . DS . 'uploads/execl/'.$fileUrl);
    }
    //生成数组
    $data = $objPHPExcel->getSheet()->toArray();
    //删除第一个元素
    array_shift($data);
    //返回数组
    return $data;
}
/**
 * @function PHPExecl_export  PHPExecl导出csv/xls/xlsx文件
 * @param $filename   导出的文件名
 * @param $data       二维数组
 */
function PHPExecl_export($filename,$data){
    $objPHPExcel = new \PHPExcel();
    $objSheet = $objPHPExcel->getActiveSheet();
    $objSheet ->setTitle("csv");
    $objSheet -> fromArray($data);
    $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    $objWriter->save("php://output");
}
