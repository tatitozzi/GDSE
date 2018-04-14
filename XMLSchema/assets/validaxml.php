<?php
function libxml_display_error($error)
{
$return = "<br/>\n";
switch ($error->level) {
case LIBXML_ERR_WARNING:
$return .= "<b>Atençãp $error->code</b>: ";
break;
case LIBXML_ERR_ERROR:
$return .= "<b>Erro $error->code</b>: ";
break;
case LIBXML_ERR_FATAL:
$return .= "<b>Erro fatal $error->code</b>: ";
break;
}
$return .= trim($error->message);
if ($error->file) {
$return .= " no <b>$error->file</b>";
}
$return .= " na linha <b>$error->line</b>\n";
 
return $return;
}
 
function libxml_display_errors() {
$errors = libxml_get_errors();
foreach ($errors as $error) {
print libxml_display_error($error);
}
libxml_clear_errors();
}
 
// Enable user error handling
libxml_use_internal_errors(true);
 
$xml = new DOMDocument();
$xml->load('produtos.xml');
 
if (!$xml->schemaValidate('valida.xsd')) {
print '<b>Erros encontrados! Corrija seu XML.</b> <br>';
libxml_display_errors();
}
else {
echo "<b>XML obedece às regras definidas no arquivo XSD!</b>";
}
 
?>