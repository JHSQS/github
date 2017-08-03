/**
 * Created by lyn on 2016/4/9.
 */

$(function(){

    $("dl").each(function(){
        $(this).children().click(function(){
           var $Src=$(this).children().attr('src');
            $("img[alt='头像选择']").attr("src",$Src);
            $("input[name='face']").val($Src);
        })


    });


});



function ShowDiv(){
    $("#MyDiv").css({"display":"block"});
    $("#fade").css({"display":"block"}) ;
    var $Width= document.body.scrollWidth;
    $("#fade").width($Width);
    $("#fade").height($(document).height());
}
function CloseDiv(){
    $("#MyDiv").css({"display":"none"});
    $("#fade").css({"display":"none"});
}

//function Openner(src){
//$("img[alt='头像选择']").attr("src",src);
//}

function change_code(obj){
    $("#verify").attr("src",verifyURL+"/" + Math.random());
    return false;

}