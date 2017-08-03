$(function(){
var Media=$("#media1")[0];
$("#act1").click(function(){
	if(Media.paused){
	$("#act1").attr('src',"/myApp/Public/Images/tm_feng/pause.png");
	Media.play();
	
	}else{
		$("#act1").attr('src',"/myApp/Public/Images/tm_feng/play.png");
		Media.pause();
	}
});
});
