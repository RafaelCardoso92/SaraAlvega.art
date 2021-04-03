<?php

$EmailFrom = "";
$EmailTo = "Saralvega@hotmail.com";
$Subject = "Website email";
$Ime = Trim(stripslashes($_POST['Ime'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Poruka = Trim(stripslashes($_POST['Poruka'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Ime: ";
$Body .= $Ime;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Poruka: ";
$Body .= $Poruka;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.sara-alvega.art/\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>