<?php
/*create table produto 
(
	idproduto SERIAL PRIMARY KEY,
	descricao VARCHAR(100)
)*/
/*
$connection = mysqli_connect('localhost', 'postgres', '','mydb');
    if($connection) {
       //echo '<br> Conectado com o banco de dados';
    } else {
        //echo '<br> Deu ruim ao conectar como banco de dados';
    }
?
*/

 
$con_string = pg_connect("host=localhost port=5433 dbname=list user=postgres password=theo");

//coneta a um banco de dados chamado "list" na máquina "localhost" com um usuário e senha


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$sql_insert = "insert into produto (descricao) 
	                       values ('".$_POST['descricao']."')";

	$result = pg_query($con_string, $sql_insert);
	if(!$result)
	{
	  echo pg_last_error($con_string);
	}
	 else 
	{
	  echo "<br> Inserido com Sucesso";
	}
	

} 
?>

<form method="post">
PRODUTO <input name="descricao">
<input type="submit">


<br>
<?php
$sql = pg_query($con_string,"Select descricao from produto");
while($exibe = pg_fetch_assoc($sql)){
  echo $exibe['descricao'] .'<br>';
}

//transformar a lista em xml
?>

