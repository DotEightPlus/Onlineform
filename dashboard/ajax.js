$(document).ready(function() 
{

	//signin
	$("#login").click(function() 
	{
		var password 	 = $("#password").val();
$("#ModalCenter").modal();

	$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {password:password},
		success 	:  function(data)
		{
			$('#msg').html(data);
		}
	}
		)

})
})