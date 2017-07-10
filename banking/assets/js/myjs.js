$(document).ready(function() {
	//all datatables
	  $('#at').DataTable();
	  $('#td').DataTable();
	//login process
	var baseUrl ='http://localhost/banking/';
	$(document).on('submit','#login-form',function () {
		console.log($("#login-form").serialize());
         $.ajax({
                type: "POST",
                url: "index.php/main/login",
                data : $("#login-form").serialize(),
				beforeSend: function(){
					$('#loader').html("<span class='font-12 normal-font'>Loading data, please wait...</span>");
				},
                success: function (data) {
                    console.log(data);
					$('#loader').hide();
					window.location = baseUrl+'dashboard';
                }

                });//end ajax             
    });//end  function
	
	$(document).on('submit','#frm-transfer',function () {
		console.log($("#frm-transfer").serialize());
         $.ajax({
                type: "POST",
                url: "dashboard/transfer",
                data : $("#frm-transfer").serialize(),
				beforeSend: function(){
					$('#loader').html("<span class='font-12 normal-font'>Loading data, please wait...</span>");
				},
                success: function (data) {
                    console.log(data);
					$('#loader').hide();
					window.location = baseUrl+'dashboard';
                }

                });//end ajax             
    });//end function
		
		
});//end ready function