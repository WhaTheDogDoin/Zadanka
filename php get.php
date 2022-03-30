<?php

if( $_GET["rzut"])



$xd=rand(1,10);
$i=5;
for ($i=0; $i<=$xd; $i++) {
    echo(rand(1,10) . "<br>");
}
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         ile razy: <input type = "text" name = "rzut" />
         <input type = "submit" />
      </form>
      
   </body>
</html>