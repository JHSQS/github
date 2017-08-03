/**
 * Created by lyn on 2016/4/11.
 */
window.onload=function(){
    //注册表单验证
    var frm=document.getElementsByTagName('form')[0];
    frm.onsubmit=function(){
        if(frm.username.value.length<2||frm.username.value.length>20){
            alert('用户名不得小于2位或大于10位！');
            frm.username.value='';
            frm.username.focus();
            return false;
        }
        if(/[<>\'\"\ \《》]/.test(frm.username.value)){
            alert('用户名不得包含非法字符！');
            frm.username.value='';
            frm.username.focus();
            return false;
        }
        //密码验证
        if(frm.password.value.length<6){
            alert('密码不得小于6位！');
            frm.password.value='';
            frm.password.focus();
            return false;
        }

        //if(frm.yzm.value.length!=4){
        //alert('验证码必须是4位！');
        //	frm.yzm.value='';
        //	frm.yzm.focus();
        //	return false;
        //}
    }



}