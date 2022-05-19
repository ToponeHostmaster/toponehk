<?php 
session_start();

//define the receiver of the email 
//Regal World Transport System Ltd.<enquiry@regalworld.com.hk>,Stone Chong <custserv@regalworld.com.hk>,
$to = "Regal World Transport System Ltd.<enquiry@regalworld.com.hk>";

$from = $_SESSION['email']; 
//define the subject of the email 
$subject = "Estimate Request for Moving";
//create a boundary string. It must be unique 
//so we use the MD5 algorithm to generate a random hash 
$random_hash = md5(date('r', time())); 
//define the headers we want passed. Note that they are separated with \r\n 
$headers = "From:".$from."\r\n"; 
//add boundary string and mime type specification 
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 
//read the atachment file contents into a string,
//encode it with MIME base64,
//and split it into smaller chunks
$attachment = chunk_split(base64_encode($_SESSION['msg'])); 
//define the body of the message. 
ob_start(); //Turn on output buffering 
?> 
--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>" 

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/plain; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/html; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

<h2>Estimate Request for Moving</h2>
<p>For details pls ref. to the enclosure.</p> 

--PHP-alt-<?php echo $random_hash; ?>-- 

--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: text/html; name="moving quote form.html"  
Content-Transfer-Encoding: base64  
Content-Disposition: attachment  

<?php echo $attachment; ?> 
--PHP-mixed-<?php echo $random_hash; ?>-- 

<?php 
//copy current buffer contents into $message variable and delete current output buffer 
$message = ob_get_clean(); 
//send the email 
$mail_sent = @mail( $to, $subject, $message, $headers ); 
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
if($mail_sent){
	echo "<table border='0'><tr><td width='33%'>&nbsp;</td>";
	echo "<td width='33%'><img src='../img/photo_regalworld.png' alt='' align='center'/></td>";
	echo "<td>&nbsp;</td></tr></table><br/>";
	echo "<h1>Thank you for using our online quote system, your enquiry was sent to Regal World sales office and we will reply to your request as soon as possible.</h1>"; 
	echo "<a href='http://www.regalworld.hk/e/default_home.asp'>Back to Homepage</a>";
	session_destroy();
}
else{
	echo('<h1>Information could not be sent.</h1>');
	echo "<a href='http://www.regalworld.hk/e/default_home.asp'>Back to Homepage</a>";
}
?> 