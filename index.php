<?php

echo (validateWhatsapp("11991004841"));

public function validateWhatsapp($mobile) {
  
    $ddd = substr($mobile, 0, 2);
    $number = substr($mobile, -8);

    if ($ddd >= 31) {
      $mobile = "55".$ddd.$number;
    } else {
      $mobile = "55".$ddd."9".$number;
    }

    return $mobile;
}
