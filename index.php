
<?php

// $_GET $_POST
/*
   if(isset($_REQUEST['pagina'])){
      echo $_REQUEST['pagina'];
      } else{
          echo 'home';
      }
   }
*/




 include 'php_pages/'.(isset($_REQUEST['pagina']) ? $_REQUEST['pagina']: 'home') . '.php';