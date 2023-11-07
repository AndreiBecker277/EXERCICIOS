<?php

$idade = 10;

echo "A Sua idade é $idade entao sua classificação é: <br>";

  switch ($idade){
  case 1: ($idade >= 5 && $idade <= 7);
     return "Infantil A , $idade anos de Idade";
     break;
  case 2: ($idade >= 8 && $idade <= 10);
     return  "Infantil B , $idade anos de Idade";
      break;
  case 3: ($idade >= 11 && $idade <= 13);
      return  "Juvenil A , $idade anos de Idade";
    break;
  case 4: ($idade >= 14 && $idade <= 17);
      return  "Juvenil B , $idade ano de Idade";
     break;
  case 5: ($idade > 18);
       return  "Adulto , $idade anos de Idade";
     break;

 };
?>