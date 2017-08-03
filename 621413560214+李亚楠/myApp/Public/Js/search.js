
$(function(){
	$("#search").click(function(){
		$("form")[0].submit();
		
		
		
		
		
		/* var search=$('input[name=search]');	
		if(search.val()==''){
				alert("关键字不能为空");
				search.focus();
				return;
			}
			$.post(deliaUrl,{search : search.val()},function(data){
				if(data.status){  
					str='<div class="title">';
					str+='<p>'+data.title+'</p>';
					str+='</div>';
					str+='<hr size="4" color="#EF2F88"/>';
					str+='<div class="con_img">';
					str+='<img src="../Images/conf1.jpg" width="280px" height="280px"/>';
					str+='</div>';
					$('#content').append(str);	
				}else{
					alert("111");
				}
			
			},'json'); */
	});
	 
	
	
	
});