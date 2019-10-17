

$(document).ready(function(){

	// Admin Login Form Validation
	$("#submitAdminLoginForm").click(function(e){
		e.preventDefault();
		var username = $("#username").val();
		var password = $("#password").val();
		//alert(username+password);
        $.ajax({
				url:'auth/validateAdminLogin.php',
				data:{username:username,password:password},
				type:'POST',
				success:function(data){
					if(data)
					{
						//alert(data);
					}
				}
			});
    });

	// Customer Details Save 
	$("#saveCustomerDetailsButton").click(function(e){
		e.preventDefault();
		var serialNo = $("#serialNo").val();
		var vechNo = $("#vechNo").val();
		var vechType = $("#vechType").val();
		var charges = $("#charges").val();
		var material = $("#material").val();
		var partyRef = $("#partyRef").val();
		var payment = $("#payment").val();
		var driver = $("#driver").val();
		var grossWeight = $("#grossWeight").val();
		var tareWeight = $("#tareWeight").val();
		var netWeight = $("#netWeight").val();
		
        $.ajax({
				url:'auth/validateCustomerDetails.php',
				data:{vechNo:vechNo,vechType:vechType,
					charges:charges,material:material,
					partyRef:partyRef,payment:payment,
					driver:driver,grossWeight:grossWeight,
					tareWeight:tareWeight,netWeight:netWeight},
				type:'POST',
				success:function(data){
					if(data)
					{
						
						$("#error-text").innerHTML = data;
						alert(data);
						location.reload();
						//window.print();
						//printReciept();
					}
				}
			});
    });

	//Transform text into uppercase
	$('#serialNo').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
	$('#vechNo').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#vechType').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#charges').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#material').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#partyRef').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#payment').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#driver').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
   	$('#grossWeight').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#tareWeight').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#netWeight').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });

    // Fill net weight autometically 
    $("#grossWeight").keyup(function() {
      var gross = $(this).val();
      var tare = $("#tareWeight").val();
      var net = gross-tare;
      $("#netWeight").val(net);
   });

    $("#tareWeight").keyup(function() {
      var tare = $(this).val();
      var gross = $("#grossWeight").val();
      var net = gross-tare;
      $("#netWeight").val(net);
   });
});


//print reciept
function printReciept(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}



