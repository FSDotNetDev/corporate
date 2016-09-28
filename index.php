<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Corporate</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<style type="text/css">
		.container {
			display: block;
			margin: 0;
			padding: 0;
			width: 100%;
			background-color: #EF6F23;
			/*background-image: url(./image/bg_1-3.png);*/
			/*background-repeat: repeat-x;*/
		}
		.header {
			/*position: block;*/
			/*overflow: auto;	*/
			/*margin: 0px;*/
			width: 100%;
			height: ;
			height: auto;
			background-color: #313131;	
			background-image: url(./image/bg_1-3.png);
			/*padding: 0px;*/
		}
	</style>
</head>
<body>	
	<div class="container">
		<div class="header" align="center">
			<img class="banner" src="image/banner.png">
		</div>
		<div class="main">
			<div class="form-style-5 formmhee">
				<form method="post" accept-charset="utf-8" id="regis_form" name="regis_form">
					<div class="title" align="center">
						<font>กรอกแบบฟอร์มเพื่อรับสิทธิ์ ฟรี</font>
					</div>
					<br>
    				<table>
						<tr><td>
							<label>Name - Surname</label>
							<input type="text" name="name" id ="name" placeholder="name - surname" tabindex="1">
						</td></tr>
						<tr><td>
							<label>Department</label>
							<input type="text" name="department" id ="department" placeholder="Department" tabindex="2">
						</td></tr>
						<tr><td>
							<label>E-mail</label>
							<input type="email" name="email" id ="email" placeholder="e-mail" tabindex="3">
						</td></tr>
						<tr><td>
							<label>Telephone</label>
							<input type="tel" name="telephone" id ="telephone" placeholder="telephone" tabindex="4">
						</td></tr>
						<tr><td>
							<label>Mobile</label>
							<input type="tel" name="mobile" id ="mobile" placeholder="mobile" tabindex="5">
						</td></tr>
						<tr><td>
							<label>จำนวน Account ที่ต้องการ เพื่อทดลองใช้งานฟรี 30 วัน</label>
							<input type="tel" name="account" id="account" placeholder="account" tabindex="6">
						</td></tr>
 					</table>	    			
	  				<div class="btn-group" role="group" align="center">
	  					<button type="reset" class="btn btn-default" id="btn-reset" tabindex="8">Reset</button>
	  					<button type="submit" class="btn btn-default" id="btn-submit" value="submit" onclick="f_submit()" tabindex="7">Submit</button> <!--  onclick="f_submit()" -->      	  					                              
               		</div>
               		<br>
				</form>
			</div>
	   </div>
	</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">

	$('#btn-submit').click (function (e) {
   		e.preventDefault();
   		var name = document.getElementById("name").value;
	   	var department = document.getElementById("department").value;   
	   	var email = document.getElementById("email").value;
	   	var telephone = document.getElementById("telephone").value;
	   	var mobile = document.getElementById("mobile").value;
	   	var account = document.getElementById("account").value;
     	var emailfilter = /^.+@.+\..{2,3}$/;

	   	if (name == "") {	   		
	      	alert("กรุณากรอกชื่อด้วยค่ะ");
	      	document.getElementById("name").focus();
	   	} else if (department == ""){
	      	alert("กรุณากรอกแผนกด้วย่คะ");
	      	document.getElementById("department").focus();
	   	} else if (email == "") {
	      	alert("กรุณากรอกอีเมลล์ด้วยค่ะ");
	      	document.getElementById("email").focus();
	   	} else if (!(emailfilter.test(email))) {
	      	alert("กรุณากรอกอีเมลล์ให้ถูกต้อง");
	      	document.getElementById("email").focus();
	   	} else if (telephone == "") {
	      	alert("กรุณากรอกเบอร์โทรศัพท์ด้วย่คะ");
	      	document.getElementById("telephone").focus();	   
	   	} else if (telephone.length != 10){
	      	alert("กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง");
	      	document.getElementById("telephone").focus();   
	   	} else if (mobile == "") { 
	      	alert("กรุณากรอกเบอร์มือถือด้วยค่ะ");
	      	document.getElementById("mobile").focus();
	   	} else if (mobile.length != 10){
	      	alert("กรุณากรอกเบอร์มือถือให้ถูกต้อง");
	      	document.getElementById("mobile").focus();
	   	} else if (account == "") {
	      	alert("กรุณาใส่จำนวนบัญชีด้วยค่ะ");
	      	document.getElementById("account").focus();
	   	} else {
	   		// document.regis_form.action ="send_mail.php";
	      	// document.getElementById("regis_form").submit(); 

	      	$.ajax({
            	type: 'post',
            	url: 'send_mail.php',
            	data: $('form').serialize(),
            	success: function () {
              		window.location.href = "http://www.mbookstore.com";
            	}
         	});     
	   	}
	});
    
</script>

</body>
</html>	