<?php

echo (whatsappUrl("11991004841", "Olá"));

function whatsappUrl($mobile, $text = '')
{
  if (strlen($mobile) >= 10) {
    $ddd = substr($mobile, 0, 2); //Separa o DDD 
    $number = substr($mobile, -8); //Separa o número
    if ($ddd >= 31) {
      $url = "https://api.whatsapp.com/send?phone=55" . $ddd . $number . "&text=" . $text; //Caso ddd maior ou igual a 31, cria link sem 9
    } else {
      $url = "https://api.whatsapp.com/send?phone=55" . $ddd . "9" . $number . "&text=" . $text; //Caso ddd seja menor, adiciona o 9
    }
    return $url;
  } else {
    return "Número sem ddd";
  }
}
