<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet prefetch' href='https://unpkg.com/buefy/lib/buefy.min.css'>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Resultado -> XPath</title>
</head>
<body>
<div id="app" class="container">
<div class="default-container">
    <h1 class="title is-spaced">Resultado: </h1> 
    <hr> 

<?php
session_start();

if(!isset($_SESSION['file']) == true){
    unset($_SESSION['file']);
    header('location: upload.php');
}else{
    $file = "uploads/" . $_SESSION['file'];
    $xml = new DOMDocument();
    $xml->load($file);
    $xpath = new DOMXPath($xml);
    $query = $_POST['query'];
    $resultado = $xpath->query($query);

    if($resultado == FALSE){
      echo ("Erro query inválida!");
    }else{
      foreach ($resultado as $value) {
           echo $value->nodeValue . "<br>";
      }
    }
}
?>
</div>
</div>
  
</body>
<script src='https://unpkg.com/vue/dist/vue.min.js'></script>
<script src='https://unpkg.com/buefy'></script>
<script src='https://unpkg.com/axios/dist/axios.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/lodash@4.17.4/lodash.min.js'></script>
<script src='https://unpkg.com/cleave.js/dist/cleave.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/sortablejs@1.6.1/Sortable.min.js'></script>
<script >Vue.use(Buefy.default);

var example = {
    data: function data() {
        return {
            files: []
        };
    }
};

var app = new Vue(example);

app.$mount('#app');
</script>
</body>

</html>




