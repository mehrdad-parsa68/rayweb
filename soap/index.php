<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style>
tr{
	height:20px;
}
</style>
</head> 
<body>
<form>

<input type="text" name="domain" id="domain"><br>
<input type="checkbox" class="ext" name="ir">ir<br>
<input type="checkbox" class="ext" name="com">com<br>
<input type="checkbox" class="ext" name="co">co<br>
<input type="checkbox" class="ext" name="net">net<br>

<input type="button" name="go_domain" value="check" id="go_domain"><br>

</form>
<table border="1" width="600" >
	<tr id="result">
    	<th>دامنه</th>
        <th>پیشوند</th>
    </tr>
    
</table>
<div id="loadingmessage">داره لود می کنه</div>
<span class="content"></span>
<script>

$('#loadingmessage').hide();
	
$("#go_domain").click(function() {
	
	
	
	var domain = $("#domain").val();
	if(domain != ''){
		
		
	$("#domain").attr('disabled','disabled');
	
	fetchDetail(domain,"com");
	
	fetchDetail(domain,"ir");
	
	fetchDetail(domain,"net");
	
	fetchDetail(domain,"co");
	}else{
	alert('esm bezan')	
	}
		
	
});

$("#azNo").click(function() {
	$("#domain").removeAttr('disabled');
	

});

//sdgsdgsdgdfdfsdgsdgsdgsdg
function fetchDetail(domain,ext2){
		ext3 = "#"+ext2;
		attr = $(ext3).attr("name");
		if(typeof attr != "undefined"){
			var test = $(ext3).attr("name");
			ajaxHelper(domain,attr,ext3);
			}
		}
//sdgsdgsdgsdgsdg		

$(".ext").click(function() {
	
	var domain = $("#domain").val();
	if(domain != ''){
	var extension = $(this).attr("name");
		var domain = $("#domain").val();
	if($(this).is(':checked')){
		extension2 = extension+'2';
		$("#result").after("<tr id="+extension+" name="+extension+"><td>"+domain+"."+extension+"</td><td id="+extension2+" name="+extension2+"></td></tr>");	
		}else{
			//$(this).attr("name");
			var string = "#"+extension;
			$(string).remove();
			}
			
		}else{
			$(this).removeAttr('checked');
	alert('esm bezan')	
	}
		
		
});

//tttttttttttttttttttttttttttttttt	
	function ajaxHelper(domain,extension,id){
		$(".content").html('');
		$('#loadingmessage').show();
		$('.ext').attr('disabled','disabled');
		$('#domain').attr('disabled','disabled');
		
			id = id+'2';
		$.ajax({
			url: "ajax.php",
			type: "POST",
			cache: false,
			data: {domain : domain, extension : extension},
			success : function(html){
				$(id).html(html);
				$('.ext').removeAttr('disabled');
				$('#domain').removeAttr('disabled');
				$('#loadingmessage').hide(); // hide the loading message
			}
			
		});
	}
//yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy

</script>
</body>
</html>