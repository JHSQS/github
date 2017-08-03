/**
 * Created by lyn on 2016/4/19.
 */

function change_code(obj){
    $("#verify").attr("src",verifyURL+"/" + Math.random());
    return false;

}
