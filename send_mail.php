<?php 
require("class.phpmailer.php");

$mail = new PHPMailer();
$body = "แจ้งแบบฟอร์มเพื่อรับสิทธิ์ของ คุณ ".$_POST['name'];
$body .= "<br><br>ชื่อ : ".$_POST['name'];
$body .= "<br><br>แผนก : ".$_POST['department'];
$body .= "<br><br>อีเมลล์ : ".$_POST['email'];
$body .= "<br><br>เบอร์โทรศัพท์ : ".$_POST['telephone'];
$body .= "<br><br>เบอร์มือถือ : ".$_POST['mobile'];
$body .= "<br><br>จำนวนบัญชี : ".$_POST['account'];
$body .= "<br><br>";
$body .= "http://www.mbookstore.com/corporate/index.php";

$mail->CharSet = "utf-8";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->Host = "input";
$mail->SetFrom("input", "mbookstore");
$mail->Subject = "CORPORATE";
$mail->MsgHTML($body);
$mail->AddAddress("input", "Dev");
$mail->AddAddress("input", "Mono");

if (!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else { ?>
	<script>
		// alert("ส่งข้อมูลเรียบร้อย");
		// window.location.replace("http://www.mbookstore.com");
		// header("Location: www3.mbookstore.com");
	</script>
<? } ?>