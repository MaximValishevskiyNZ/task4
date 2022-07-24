
<?php
echo "<pre>";
if (($file = fopen('vacancy.csv', 'r')) !== false) {
   while (($data = fgetcsv($file , 1000, ',')) !== false ) {
     var_dump($data);
   }
}


echo "</pre>";