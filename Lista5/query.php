<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Query</title>
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
    <h1 class="title is-spaced">Query</h1> 
    <h2 class="subtitle">Digite o parâmetro</h2> 
    <hr>     
    <section>
        <b-field grouped>
            <b-input placeholder="Pesquisando..."></b-input>
            <p class="control">
                <button class="button is-primary">Buscar</button>
            </p>
        </b-field>
    </section>

<?php


$xml = new SimpleXMLElement($string);
$xml->load(".xml");

/* Search for <a><b><c> */
$result = $xml->xpath('/a/b/c');

while(list( , $node) = each($result)) {
    echo '/a/b/c: ',$node,"\n";
}

/* Relative paths also work... */
$result = $xml->xpath('b/c');

while(list( , $node) = each($result)) {
    echo 'b/c: ',$node,"\n";

    //alterar
}
?>
</div>
    
</div>

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
</body></html>