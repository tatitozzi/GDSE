<?php
session_start();

if(!isset($_SESSION['file']) == true){
    unset($_SESSION['file']);
    header('location: http://localhost/GDSE/Lista5/upload.php');
}else{
    $file = "uploads/" . $_SESSION['file'];
    $xml = new DOMDocument();
    $xml->load($file);
    $xpath = new DOMXPath($xml);
    $query = $_POST['query'];
    $resultado = $xpath->query($query);

    if($resultado == FALSE){
      echo ("Erro query invalida!");
    }else{
      foreach ($resultado as $value) {
           echo $value->nodeValue . "<br>";
      }
    }
}
?>
