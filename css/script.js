$(document).ready(function(){
	$("#network").click(function(){
	var password = $("#netPass").val();
	var name = $("#netName").val();
	//alert(name+"  "+password);
	window.location.assign("https://192.168.4.1/connect("+name+","+password+")");

});

$("#emailSetter").click(function(){
	var email = $("#emailText").val();
	window.location.assign("https://192.168.4.1/setMail("+email+")");
	//alert(email);
});

$("#timeSetter").click(function(){
	var time = $("#timeText").val();
	window.location.assign("https://192.168.4.1/setTime("+time+")");
	//alert(time);
});

$("#allswitch").click(function(){
	window.location.assign("https://192.168.4.1/offAll()");
	//alert(time);
});

$(".changeover").click(function(e){
	var data = $(this).data("state");
	window.location.assign("https://192.168.4.1/switch("+data+);
	//alert(data);
}); 

var request = new XMLHttpRequest();
request.onreadystatechange= function(){
	if (request.readyState==4 && request.status==200) {
		var data = JSON.parse(request.responseText);
		var ons =  $(".changeover");

		for (var i = 0; i < ons.length; i++) {
			 var id = ons[i]['id'];
			 var state = $("#"+id).data("state");
			 var stateData = data[state];
			 alert(data[state]);
			 if(stateData=="off"){
			 	$("#"+id).text("OFF");
			 	$("#"+id).attr("class","btn btn-danger rounded-circle changeover");
			 }
			else{
				$("#"+id).text("ON");
				$("#"+id).attr("class","btn btn-success rounded-circle changeover");
			}
		}
		$("#currentTime").text(data.time);
		$("#currentEmail").text(data.email);
		$("#currentNet").text(data.netName);
	}
}
request.open("GET","scaasconfig.json",false);
request.setRequestHeader("Content-type","application/json");
request.send();



});
