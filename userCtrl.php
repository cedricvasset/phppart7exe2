<?php
if (!empty($_POST['lastname'])){
  if(preg_match('/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ\'-]+$/', $_POST['lastname'])){
/*htmlspecialchars bloque les caracteres speciaux et les transforme en caractere imprimable*/
    $lastname = htmlspecialchars( $_POST['lastname']);
  }else{
    $lastname = 'veuillez entrer un prenom valide';
  }
}else{
  $lastname = 'veuillez entrer votre prénom';
}
if (!empty($_POST['firstname'])){
  if(preg_match('/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ\'-]+$/', $_POST['firstname'])){
    $firstname = htmlspecialchars( $_POST['firstname']);
  }else{
    $firstname = 'veuillez entrer un nom valide';
  }
}else{
  $firstname = 'veuillez entrer votre nom';
} ?>
