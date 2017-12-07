<?  
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value;  
header("Pragma: public");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename= ".$file);
header("Content-Transfer-Encoding: binary ");

$salida="";
$lineas = explode("\n", $textarea);
for ($i=0;$i<count($lineas);$i++) {
   if (trim($lineas[$i])!="")
     $salida.=$lineas[$i];  
}  
echo $salida;
?>  
 
