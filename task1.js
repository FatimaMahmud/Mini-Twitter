function callAjax() {
	"use strict";
	var Name = document.getElementById('text');
	var Tweet = document.getElementById('tweet');
	
	var urlToSend = "task1.html";
	
	$.ajax({
		url: urlToSend,
		dataType:"json",
		success: function(data) {
			Name.innerHTML = "<b></b>" + data.text ;
			Tweet.innerHTML = "<b></b> " + data.tweet;
			
		}
	});
}