<?php
/*
  Consider the following string(bbit3c.txt)
  It constains names(surname,second_name,first_name),number,country and country code of some individuals

  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows

      a). first_name second_name,surname (# country_code(0) number[country])
      b). .......
      c). .......

    Summary
     -- Total names : total.
     -- Total unique countries : total(list of countries - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1)
 */
 $mugush="Chirakahula,Mukwana Joe.0500387482.UGANDA.+256|<br>
 Wambua,Doe Mumbua.080023450.KENYA.+254|<br>
 Vonbora,Katherina Luther.0600990033.GERMANY.+32
 |<br>Boromir,Grommit Wallace.0100873901.IRELAND.+98
 |<br>Piepont,Edwards Jonathan.0200983729.AMERICA.+1
 |<br>Asaph,Elihu Mose.02990033.ISRAEL.+2
 |<br>Otoyo,Wafula Joel.0777799920.KENYA.+254
 |<br>Mapete,Mwambingu Simba.0987483292.TANZANIA.+257
 |<br>SARATON,DAVID BREINARD.043899292.AMERICA.+1
 |<br>POMPI,JOHN OWEN.074749292.ZAMBIA.+267
 |<br>MAG,JOHN BUNYAN.09837328.UGANDA.+256
 <br>|Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32";

 function order(){

 }
 $words = explode('|',$mugush);
 foreach ($words as $word){
 echo $word. '<br>' ;
}
//endforeach;
$phrase =explode('.',$word);
foreach ($phrase as $letters => $value){
echo $letters;
}
//endforeach;
//echo order();
 ?>
