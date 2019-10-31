$(document).ready(function(){
	var request = new XMLHttpRequest();
	request.onreadystatechange= function(){
		if (request.readyState==4 && request.status==200) {
			var data = JSON.parse(request.responseText);
			var select="";
			var table="";
			for (var i = 1; i <= data.size; i++) {
				select+="<option value = '"+data[i].value+"'>"+data[i].name+"</option>";
				if(i<=5){
					table+="<tr><td>"+data[i].name+"</td> <td>"+data[i].value+"</td></tr>";
				}
				
			}
			$("#from").html(select);
			$("#to").html(select);
			$("#head").after(table);
			console.log(table);
		}
	}
	request.open("GET","data.json",true);
	request.setRequestHeader("Content-type","application/json");
	request.send();


	$("#input").on("keyup",function(){
		var val = $("#input").val();
		var result = (val*(1/$("#from").val()))*($("#to").val());
		$("#result").val(result.toFixed(2));
	});
	$("#to").on("click",function(){
		var val = $("#input").val();
		var result = (val*(1/$("#from").val()))*($("#to").val());
		$("#result").val(result.toFixed(2));
	});
	$("#from").on("click",function(){
		var val = $("#input").val();
		var result = (val*(1/$("#from").val()))*($("#to").val());
		$("#result").val(result.toFixed(2));
	});	
});
