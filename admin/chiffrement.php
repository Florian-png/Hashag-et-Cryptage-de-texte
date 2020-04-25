<?php

// On récupère le texte ici, on applique le Hashage
// On renvoie la valeur hashé sur l'autre page et si possible une clé de déchifrage
$aConvertir = "";
$isSuccess = false;

  if(isset($_POST["aconvertir"])) {
    $aConvertir = htmlspecialchars($_POST["aconvertir"]); // On récupère le text que l'on stock dans une variable
    $isSuccess = true;
  } else {
    $isSuccess = false;
  }



  // ici test, si tout est bon et si success est = true on applique
  if($isSuccess) {
    // On applique le Hashage de la fonction
    $converti = Hashage($aConvertir);
    $convert2 = Hashage2($aConvertir);
    $crypt = Cryptage($aConvertir);
  }



function Hashage2($var) {
  // Deuxieme méthode de hasage
  $hash1 = hash_init('ripemd160'); // défini le type de hashage
  hash_update($hash1, $var);
  return hash_final($hash1);

}

function Hashage($var) {
  $hash1 = hash('ripemd160', $var);
  return bin2hex($hash1);
}

function Cryptage($var) {
  $crypt = crypt($var);
  return $crypt;
}


?>
