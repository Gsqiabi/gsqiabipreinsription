<?php
if(isset($_POST['send'])){
  extract($_POST);
 
  
  if(isset($nom) && $nom !="" && isset($prenom) && $prenom!="" && isset($telephone) && $telephone !="" && 
          isset($email) && $email !=""){
           //récuperer les donnees 

           
           
           
           
           
           
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
   echo"envoie";
   }else{
   echo"erreur";
   }
  
  
 
}
?>
<html>

<head>
  <title>Formulaire d'inscription</title>
  <style>
    body {
      background-image: url('logo.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 1400px 900px;

    }
    .label1{
        color:#0C1C6A;
        font-size: 20px;
        font-weight:bolder;
        text-decoration: none; 
    }

    .formulaire {
      padding: 20px;
      position: absolute;
      top: -20%;
      left: 48%;
      font-style: italic;
      font-size: 15px;
      
      color: #0e2bd3 width: 700px;
      height: 500px;
      margin-top: 100px;
      margin-left: -400px;
      border-radius: 8px 8px;

      display: flex;
      justify-content: space-between;
      flex-direction: column;
    }

    .title {
      font-style: unset;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: #1E2774;
    }

    .envoyer {
      width: 110px;
      height: 30px
    }

    .bienvenue {
      margin: 10px;
    }

    .photo {
      float: left;
      width: 600px;
      height: 500px;
      margin-top: 60px;
      margin-right: 20px;


    }

    .envoyer {
      background-color: #DE340E;
    }

    .logo {
      float: left;
      margin-right: 0px;
      width: 100px;
      height: 100px;

    }
    input:focus {
  color: red;
  background:lightblue;
}
.logo-size{
  height:240px;
  width:240px;
}
#logo_fixe { position : fixed; left : 10px; top : 10px;
  margin-top: -4%;
 }
 #logo1_fixe { position : fixed; right : 10px; top : 10px; float:left;
  margin-top: -4%;
 }
 .pre{
  color:#DE340E;
 }
 .erreur{
  color:#CC0000;
            margin-bottom:10px;
}
.liste{
  background-color: lightblue;
}

  </style>
</head>

<body>

<div id="logo1_fixe"> 
 <img class="logo-size"src="logo1.png">  
</div>
  
<div id="logo_fixe"> 
 <img class="logo-size"src="logo1.png">  
</div>
  


  <div class="formulaire">
    <fieldset>
  <legend>
    <label class="text">
      <h2 class="pre"> Préinscription &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  التسجيل القبلي  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   مرحبا بكم</h2>
    </label></legend>
</fieldset><br>

    <form action="" method="post">
      <label class="label1" for="nom">Nom :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" id="nom" name="nom"
        required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="nom" name="nom" lang="ar" required> <label class="label1" for="nom">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:الإسم العائلي </label> <br><br>
      <label class="label1" for="nom">Prénom
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" id="prenom" name="prenom"
        required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        &nbsp;&nbsp;&nbsp; <input type="text"
        id="nom" name="nom" lang="ar" required> <label class="label1" for="nom"> &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  الاسم الشخصي
      </label><br><br>
      <label class="label1" for="lieu">Lieu de naissance :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <input type="text" id="lieu" name="lieu"
        required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; <input type="text"
        id="nom" name="nom" lang="ar" required> <label class="label1"
        for="nom">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:مكان
        الإزدياد</label><br><br>
      <label class="label1" for="date_de_naissance">date de naissance
        :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
      <input type="date" id="date_naissance" name="date_naissance"  class="liste" required>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label class="label1" for="nom"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:تاريخ الإزدياد </label><br><br>



      <label class="label1" for="nom">Sexe
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <label class="label1" for="contactChoice2">Masculin </label>

      <input type="radio" id="contactChoice1" name="contact" value="email">
      <label
        for="contactChoice1" class="label1">ذكر&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <label class="label1" for="contactChoice2">Féminin </label>
      <input type="radio" id="contactChoice2" name="contact" value="telephone"><label class="label1" for="contactChoice2">
        :الجنس</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label
        for="nom" class="label1">أنثى </label>
      <br><br>
      <label class="label1" for="niveau_acces">Niveau actuel :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="languages" id="lang" class="liste">
        <option value="javascript">P-section</option>
        <option value="javascript">M-section</option>
        <option value="javascript">G-section</option>
       
        <option value="php">CE1</option>
        <option value="java">CE2</option>
        <option value="golang">CE3</option>
        <option value="python">CE4</option>
        <option value="python">CE5</option>
        <option value="python">CE6</option>
        <option value="c#">1A-collège</option>
        <option value="C++">2A-collège</option>
        <option value="erlang">3A- collège</option>
        <option value="erlang">Tronc-commun-sc-exp</option>
        <option value="erlang">1A-bac-physique</option>
        <option value="erlang">2A-bac-physique</option>
      </select>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <label class="label1" for="niveau_acces">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :المستوى الحالي </label> <br><br>
      <label class="label1" for="niveau_acces">Niveau sollicité :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <select name="languages" id="lang" class="liste">
        <option value="javascript">P-section</option>
        <option value="javascript">M-section</option>
        <option value="javascript">G-section</option>
       
        <option value="php">CE1</option>
        <option value="java">CE2</option>
        <option value="golang">CE3</option>
        <option value="python">CE4</option>
        <option value="python">CE5</option>
        <option value="python">CE6</option>
        <option value="c#">1A-collège</option>
        <option value="C++">2A-collège</option>
        <option value="erlang">3A- collège</option>
        <option value="erlang">Tronc-commun-sc-exp</option>
        <option value="erlang">1A-bac-physique</option>
        <option value="erlang">2A-bac-physique</option>
      </select>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label class="label1" for="niveau_acces">
        &nbsp;&nbsp;: المستوى المطلوب</label> <br><br><br>
      <label class="label1" for="nom">Téléphone
        :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" id="telephone" name="telephone" required>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label class="label1" for="nom"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:الهاتف</label><br><br>

      <label class="label1" for="nom">Email
        :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" id="email" name="email" required><br><br><br>
      
      <label  class="label1" for="nom">Voulez-vous prendre un rendez-vous ? Clique içi
        &nbsp;&nbsp;</label>
      <input type="datetime-local" value=""
        style="background-color:#6DC4F6; border-color:#6DC4F6;"> <label class="label1" for="nom">
        &nbsp;&nbsp;&nbsp;  هل تريد أن تأخد موعد ؟ إضغط هنا</label><br><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Envoyer"
        name="send" class="envoyer">
    </form>


  </div>

</body>

</html>