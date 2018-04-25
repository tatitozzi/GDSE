<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selecione o XML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet prefetch' href='https://unpkg.com/buefy/lib/buefy.min.css'>
    <link rel='stylesheet prefetch' href='https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css'>
    <link rel='stylesheet prefetch' href='https://use.fontawesome.com/releases/v5.0.6/css/all.css'>
    <style class="cp-pen-styles"></style>
</head>
<body>

<div id="app" class="container">
<div class="default-container">
    <br>
    <h1 class="title is-spaced">XML</h1> 
    <h2 class="subtitle">Selecione o XML</h2> 
    <hr>     
V1--
<form action="#" enctype="multipart/form-data" action="__URL__" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000">
    <b-field class="file">
        <b-upload v-model="files">
            <a class="button is-primary" value="Enviar arquivo" type="submit">
<b-icon icon="upload"></b-icon>
<span>Selecionar arquivo</span>
            </a>
        </b-upload>

        <span class="file-name"
            v-if="files && files.length">
            {{ files[0].name }}
        </span>
    
    </b-field>
</form>
<br>
V2---
        <form action="query.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileUpload">
      <input type="submit" value="Enviar">
   </form>

</div>
</div>

<?php
   if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = '/wamp64/www/GDSE/Lista5/'; //Diretório para uploads

      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   }
?>

        
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
//# sourceURL=pen.js
</script>
</body></html>