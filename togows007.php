<HTML>
  <HEAD>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>biolansys ensembl REST    </title>
    <meta itemprop="name" content="bioinformatica bioinformatics biocomputacion ">
    <meta itemprop="description" content="Pagina web de bioinformática">
    <META NAME="Title" CONTENT="LanSys ">
    <META NAME="Author" CONTENT="José Lanzos Gómez">
    <META NAME="Subject" CONTENT="bioinformatica bioinformatics ">
    <META NAME="Description" CONTENT="Página web biolansys">
    <META NAME="Keywords" CONTENT="bioinformatica bioinformatics biocomputacion sequence align genoma genes biology biologia ">
    <META NAME="Language" CONTENT="Castellano">
    <META NAME="Copyright" CONTENT="© LanSys Sistemas S.A.">
    <META NAME="Designer" CONTENT="J.Lanzos">
    <META NAME="Distribution" CONTENT="Global">
    <link rel=stylesheet href="../a.css" type="text/css">
    

  </HEAD>
  <BODY   topmargin="0" leftmargin="0" rightmargin=0>
  <center>
  <font face='courier,courier new,monospace' size=2>
  <textarea name="texttocopy"   cols="90" rows="31" wrap=SOFT>
<?php
function httpRequest($host, $port, $method, $path, $params) {
  // Params are a map from names to values
  $paramStr = $params;
  
  // Assign defaults to $method and $port, if needed
  if (empty($method)) {
    $method = 'GET';
  }
  $method = strtoupper($method);
  if (empty($port)) {
    $port = 80; // Default HTTP port
  }

  // Create the connection
  $sock = fsockopen($host, $port);
  if ($method == "GET") {
    $path .= "?" . $paramStr;
  }
  fputs($sock, "$method $path HTTP/1.1\r\n");
  fputs($sock, "Host: $host\r\n");
  fputs($sock, "Content-type: " .
               "application/x-www-form-urlencoded\r\n");
  if ($method == "POST") {
    fputs($sock, "Content-length: " . 
                 strlen($paramStr) . "\r\n");
  }
  fputs($sock, "Connection: close\r\n\r\n");
  if ($method == "POST") {
    fputs($sock, $paramStr);
  }

  // Buffer the result
  $result = "";
  while (!feof($sock)) {
    $result .= fgets($sock,1024);
  }

  fclose($sock);
  return $result;
};
 
$resp = httpRequest("http://togows.dbcls.jp",
    "80", "POST", "/convert/fasta.genbank",
    $data);
echo $resp; 
?>   
</textarea>  
</BODY>
</HTML>