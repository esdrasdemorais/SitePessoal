<?php
interface Message
{
    function sendMail();
    function sendSMS();
    function saveMessage();
}

abstract class Messaging
{
    protected function sendMail($message)
    {
        $mail = new PHPMailer();
    	$body = $message;
    	$mail->IsSMTP(); // telling the class to use SMTP
    	#$mail->SMTPSecure = 'tls';
    	$mail->Host = $host;
    	#$mail->SMTPDebug = 1; // enables SMTP debug information (for testing)
    	// 1 = errors and messages
    	// 2 = messages only
    	$mail->SMTPAuth = true; // enable SMTP authentication
    	$mail->Port = $port; // set the SMTP port for the service server
    	$mail->Username = $userName; // account username
    	$mail->Password = $password; // account password
    
    	$mail->SetFrom($userName, $nameMainFrom);
    	$mail->Subject = $subject;
    	$mail->MsgHTML($body);
    	$mail->AddAddress($to, "");
    	foreach($arrForwards as $name => $email) {
            $mail->AddCC($email, $name);
    	}
    	$mail->addReplyTo($email, $name);

    	if(false === $mail->Send()) {
	    echo 'Erro ao enviar email: ' . print($mail->ErrorInfo);
    	} else {
	    echo "<script style=\"text/javascript\">alert('Email enviado com sucesso.'); location.href = '/'</script>";
        }
    }

    protected function  sendSMS()
    {

    }
	
    public function saveMessage()
    {

    }
}
