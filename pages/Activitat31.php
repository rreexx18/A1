<?php

// función para validar un email

function email_validation($email)
{
  $result = trim($email);
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    return "El email ".$email." es valido.";
  } 
  else 
  {
    echo "El email ".$email." no es valido.";
  }
}
echo email_validation("abc@example.com");
echo "<br><br>";
echo email_validation("abc#example.com");