
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 2</title>
   </head>
   <body>
     <p>
<?php
function string($firstname, $lastname)
{
  $name = $firstname . ' ' . $lastname;
  return $name;
}
 echo string('Cousin Ruby', 'Cédric');

 ?>
     </p>
   </body>
 </html>
