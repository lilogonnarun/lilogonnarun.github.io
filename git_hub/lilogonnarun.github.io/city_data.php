<?php
   // Array with names
   $a[] = "Hong Kong,Shop 3, 69 Peel St, Central";
   $a[] = "Beijing";
   $a[] = "Nanjing";
   $a[] = "Macau";
   $a[] = "Shanghai";
   $a[] = "Tianjin";
   $a[] = "Anqing";
   $a[] = "Bengbu";
   $a[] = "Bozhou";
   $a[] = "Chaohu";
   $a[] = "Shenzhen,福田区福田ＣＢＤ福华一路6号免税商务大厦 ";
   $a[] = "Guangzhou";
   $a[] = "Hangzhou";
   $a[] = "Ningbo";
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
		
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Sorry, we currently don't have shops there" : $hint;
?>