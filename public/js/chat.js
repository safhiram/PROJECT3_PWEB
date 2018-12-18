$(document).ready(function(){
	
	if (typeof(Storage) !== "undefined") {
	$('.chat').html(localStorage.getItem('key'));
    var logged = true;
	var date = new Date();
	$('span','#user').html(localStorage.getItem('user'));

	$(".date").html(date.getHours()+"."+date.getMinutes());
	$(".regbox").hide();

	function input(){
		if(true){
			date = new Date();
			var hour = date.getHours();
			var minute = date.getMinutes();
			var text = $("#type").val();
			if(text!=""){
				if(hour < 10) hour = "0"+hour;
				if(minute < 10) minute = "0"+minute;
				$(".chat").append("<li><span class='date'></span> - "+text+"</li>");
				$('.date:last').html(hour+"."+minute);	 
				$("#type").val("");
			}
			else alert("Jangan SPAM");
		}
		else alert("Pilih teman");
	}

	$('#type').keypress(function(event){
    	var keycode = event.keyCode;
    	if(keycode == '13'){
    		input();	
   		}
   		localStorage.setItem('key',$('.chat').html());
	});

	$("#send").click(function(){
		input();
		localStorage.setItem('key',$('.chat').html());
	});

	}
});