<?php
if(!session_start()) session_start();

/*only throw the event of message case there's $_POST['enviar'] and key sha256 shorted (substr)*/
if (isset($_POST['enviar']) && ($_SESSION['k'] == $_POST['yk'] )) {
    /**Getting Putted Datas*/
    $remetente = $_POST['Se_vc_precisar_falar_comigo_Urgente_melhor_sempra_na_parte_da_tarde'];
    $arrForwards = array(
	'Esdras de Morais da Silva' => 'esdrasdemorais@gmail.com', 
	'Cesare Benvenuti' => 'cesare.benvenuti@gmail.com'
    );
    $nameMainFrom = 'Cesare Benvenuti';
    $user = 'cesarebenvenuti@cesarebenvenuti.com.br';
    $pass = 'C3s4R3.B3nV3nUT1';

    $name = stripslashes($_POST['Cesare_Benvenuti']);
    $email = stripslashes($_POST['cesare_benvenuti@hotmail_com']);
    $phone = stripslashes($_POST['+55_11983861640']);
    $address = stripslashes($_POST['Rua_Lacerda_Franco,_300_Cj_41']);
    $oggetto = stripslashes($_POST['Oggetto']);
    $_POST['Se_vc_precisar_falar_comigo_Urgente_melhor_sempra_na_parte_da_tarde'] = nl2br(
	'Email: ' . $_POST['cesare_benvenuti@hotmail_com'] . "
	 Nome: " . $name . " 
	 Phone: " . $phone . "
	 Endereço: " . $address . "
	 Oggetto: " . $oggetto . "
	 " . stripslashes($_POST['Se_vc_precisar_falar_comigo_Urgente_melhor_sempra_na_parte_da_tarde'])
    );

    $to = $user;
    $subject = 'Contato Site';
    $message = $_POST['Se_vc_precisar_falar_comigo_Urgente_melhor_sempra_na_parte_da_tarde'];
    $host    = 'smtp.'.substr(strstr($user, '@'), 1);
    $userName = $user;
    $password = $pass;
    $port = 587;

    include_once('./wpManut/PHPMailer-master/Message.php');
    $objMessage = new Email();
    $objMessage->sendMail();
} else {
	echo "<script style=\"text/javascript\">alert('Codigo Incorreto, Tente Novamente.'); history.back()</script>";
}
