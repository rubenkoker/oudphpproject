<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
<body>
  <div class="menu">
    <ul>
      <li class="items"><a href="index.html">home</a></li>
      <li class="items"><a href="catagories.php">catagories</a></li>
      <li class="items"><a href="#">about</a></li>
      <li class="items"><a href="#">contact</a></li>
    </ul>
  </div>
Welcome <?php
//plaatshouder voor db code
$persooncompare = "jantje";
$meelcompare = "geitenpoep";
$persoonnaam =  $_POST["name"];
$meelnaam = $_POST["wachtwoord"];
if($persoonnaam==$persooncompare){
  echo "goede naam";
  $x = true;
}
else{
  echo"gebruiker niet gevonden";
  $x = false;
}
if($meelnaam==$meelcompare){
  echo "goede e-mail";
  $y = true;
}
else{
  echo"adres niet gevonden";
  $y = false;
}
if($x&&$y){
  echo"succesvol ingelogt";
}
else{
  echo" ingeloggen mislukt";
}

 echo $_POST["name"]; ?><br>

</html>
