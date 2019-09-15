<?php
if (isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['reason']) && !empty($_POST['reason'])
&& (isset($_POST['message']) && !empty($_POST['message'])){
   $destino='marcelo@2msoftsolutions.com';
   $razon=$_POST['reason'];
   $mensaje=$_POST['message'];
   $origen=$_POST['mail'];

   mail($destino,$razon,$mensaje,$origen);
   echo 'Se envio con exito';
   else{
      echo "Problemas al enviar";
   }

}
 ?>
