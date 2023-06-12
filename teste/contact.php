<?php
if(isset($_POST['send'])){
  extract($_POST);
  if(isset($nom) && $nom !="" && isset($prenom) && $prenom!="" && isset($telephone) && $telephone !="" && 
          isset($email) && $email !=""){
            $rend=$_POST['send'];
       // envoie email
       
$to = "gsqiabiinscription@gmail.com";
$subject = "Vous avez reçu un email de :".$email;

$message = "
<p>Vous avez reçu un message de <strong> ".$email."</strong></p>
<p><strong> Nom</strong>".$nom."</p>
<p><strong> Prenom</strong>".$prenom."</p>
<p><strong> Telephone</strong>".$telephone."</p>
<p><strong> email</strong>".$email."</p>
<p><strong> email</strong>".$rend."</p>




";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$email.'>'. "\r\n";
//envoyer d'email
$send = mail($to,$subject,$message,$headers);}
   //verifictaion de l'envoi
   if($send){
    $info ="message envoye";
   }else{
    $info="message non envoye";
   }
  
  
  }
?>