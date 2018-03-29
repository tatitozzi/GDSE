<?php 
ini_set('default_charset', 'UTF-8');

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bd";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
    //echo "Erro na conexão"
}else{
    //echo "Conexão realizada com sucesso";
}	

$xml = simplexml_load_file('estoque.xml'); //inserir caminho xml

//analisa o xml e salva os dados no BD
$p = 0;
foreach ($xml as $produto)
{
$aux = $produto -> attributes();

//$sql = "insert into produto (id_produto, nome, quantidade) VALUES ('".$aux['id']."', '".$produto->descricao."', '".$produto->quantidade."')";
//echo $sql;
//exit;    

$sqlN= "insert into produto (id_produto, nome, quantidade) VALUES ('".$aux['id']."', '".$produto->descricao."', '".$produto->quantidade."')
ON DUPLICATE KEY UPDATE quantidade ='".$produto->quantidade."'";


mysqli_query ($conn, $sqlN);
    
    //echo mysqli_error ($conn);

    if(mysqli_affected_rows($conn) != -1){
       $p++;
    }
};
echo "$p produtos importados com sucesso!";

//echo $sqlN;
//exit;

////  inserir dados no backup
$connection = pg_connect("host=localhost port=5433 dbname=backup user=postgres password=theo");
    if($connection) {
     //  echo '<br> Conectado com o banco de dados';
    } else {
      //  echo '<br> Deu ruim ao conectar como banco de dados';
    }

    

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$sql_insert = "insert into produto (id_produto, descricao) 
	                       values ('".$_POST['id_produto']."', '".$_POST['descricao']."')";

	$result = pg_query($con_string, $sql_insert);
	if(!$result)
	{
	  echo pg_last_error($con_string);
	}
	 else 
	{
	  echo "<br> Inserido com Sucesso";
    }
};
	

/*"INSERT INTO tabela_local(id, nome, descricao, data)
SELECT id, nome, descricao, data FROM 
dblink('host=hostRemoto user=postgres password=senha dbname=base_remota'::text,
'SELECT id, nome, descricao, data FROM tabela_remota'::text, false)
tabela_temp(id integer, nome character varying, descricao character varying, data date)
)";
*/
//"insert into estoque.produto(id_produto,descricao)
//select id_produto,nome from bd.produto";

//echo $inserir;