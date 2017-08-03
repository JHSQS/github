<?php
/**
 * User: lyn
 * Date: 2016/3/17 18:06
 */
header("Content-Type: text/html; charset=utf-8");
//过滤用户名函数
 function _check_name($_string){         //初次接收到的受污染的字符串
//去掉两边空格
    $_string=trim($_string);
//限制名字长度
    if(mb_strlen($_string,'utf-8')<2||mb_strlen($_string,'utf-8')>20){
        _back('名字长度小于两位或大于20位');
    }
    return $_string;
}
//验证密码函数
function _check_password($_first_pass,$end_pass){
    //判断密码
    if (strlen($_first_pass)<6||strlen($_first_pass)>16){
        _back('密码不符合规范，密码不得小于6位或大于16位');
    }
    if ($_first_pass!=$end_pass){
        _back('密码不一致，请再次确认密码！！！');
    }
    return sha1($_first_pass);
}

function _check_modify_password($_string){
    //判断密码
    if (!empty($_string)){
        if (strlen($_string)<6||strlen($_string)>16){
            _back('密码不符合规范，密码不得小于6位或大于16位');
        }
    }else
    {
        return null;

    }
    return sha1($_string);

}


/**
 * 发布内容表情替换
 */
function replace_phiz($content){
       preg_match('/\[.*?\]/is',$content,$arr);
        if($arr[0]){
            $phiz=F('phiz','','./Data/');
            foreach($arr as $v){
                    foreach($phiz as $key=>$value){
                        if($v=='['.$value.']'){
                            $content=str_replace($v,'<img src="'.__ROOT__.'/Public/Images/mood/phiz/'.$key.'.gif"/>',$content);
                        }
                    }

            }

        }
return $content;
}














