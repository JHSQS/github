$(function(){;

			$('.submit').click(function(){
				alert(111);
			/* var username=$("input[name=name]");
			if(username.val()==''){
				alert("昵称不能为空");
				username.focus();
				return;
			}
			$.post(moodUrl,{username : username.val(),content : content.val()},function(data){
				if(data.status){
				var str='<dl class="paper a1">';
					str+='<dt><span class="username">'+data.username+'</span>';
					str+='<span class="num">NO.'+data.id+'</span>';
					str+='</dt><dd class="content">'+data.content+'</dd>';
					str+='<dd class="bottom">';
					str+='<span class="time">'+data.time+'</span>';
					str+='<a href="" class="close"></a></dd></dl>';
					$('#main').append(str);
					$('#close').click();
				}
				else{
					alert('添加失败');
				}
			},'json'); */
		});
});