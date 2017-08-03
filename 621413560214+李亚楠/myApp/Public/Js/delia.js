/**
 * Created by lyn on 2016/5/9.
 */
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