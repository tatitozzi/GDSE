<?
//CONECTA AO BANCO DE DADOS 

$conn = @mysql_connect("localhost", "","") or die("ERRO NA CONEXÃO");

//SELECIONA A BASE DE DADOS A SER UTILIZADA
$db = @mysql_select_db("imasters", $conn) or die("ERRO NA SELEÇÃO DA BASE DE DADOS");

//SQL
$sql = @mysql_query("SELECT A.ID, A.NOME, A.EMAIL FROM contatos A") or die("ERRO NO SQL");

//TOTAL DE LINHAS AFETADAS PELA CONSULTA
$row = mysql_num_rows($sql);

//VERIFICA SE A PESQUISA RETORNOU ALGUMA LINHA
if($row > 0) {

//ARQUIVO
$arquivo = "contato.xml";

//ABRE O ARQUIVO(SE NÃO EXISTIR, CRIA)
$ponteiro = fopen($arquivo, "w");

//ESCREVE NO ARQUIVO XML
fwrite($ponteiro, "<?xml version="1.0"?> ");
fwrite($ponteiro, "<agenda> ");

for($i=0; $i<$row; $i++) {

 //PEGA OS DADOS DO SQL
 $id = mysql_result($sql,$i,"A.ID");
 $nome = mysql_result($sql,$i,"A.NOME");
 $email= mysql_result($sql,$i,"A.EMAIL");

 //MONTA AS TAGS DO XML
 $conteudo = "<contato>";
 $conteudo .= "<id>$id</id>";
 $conteudo .= "<nome>$nome</nome>";
 $conteudo .= "<email>$email</email>";
 $conteudo .= "</contato>";

 //ESCREVE NO ARQUIVO
 fwrite($ponteiro, $conteudo);
}//FECHA FOR

//FECHA A TAG AGENDA
fwrite($ponteiro, "</agenda>");

//FECHA O ARQUIVO
fclose($ponteiro);

//MENSAGEM
echo "<h2>iMasters – Coluna PHP – Artigo 83</h2><br>";
echo "O arquivo <b>".$arquivo."</b> foi gerado com SUCESSO !";
}//FECHA IF($row)
?>