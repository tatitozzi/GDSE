<?php
/*create table produto 
(
	idproduto SERIAL PRIMARY KEY,
	descricao VARCHAR(100)
)*/
$connection = mysqli_connect('localhost', 'root', '','mydb');
    if($connection) {
       //echo '<br> Conectado com o banco de dados';
    } else {
        //echo '<br> Deu ruim ao conectar como banco de dados';
    }




if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$sql_insert = "insert into produto (descricao) 
	                       values ('".$_POST['descricao']."')";

	$result = mysqli_query($connection, $sql_insert);
	if(!$result)
	{
	  echo mysqli_last_error($connection);
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
$sql = mysqli_query($connection,"Select descricao from produto");
while($exibe = mysqli_fetch_assoc($sql)){
  echo $exibe['descricao'] .'<br>';
}
?>