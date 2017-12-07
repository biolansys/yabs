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
<!--  <textarea name="texttocopy"   cols="90" rows="31" wrap=SOFT> -->
<?php

function file_post_contents($url,$headers=false) {
    $url = parse_url($url);
 
    if (!isset($url['port'])) {
      if ($url['scheme'] == 'http') { $url['port']=80; }
      elseif ($url['scheme'] == 'https') { $url['port']=443; }
    }
    $url['query']=isset($url['query'])?$url['query']:'';
 
    $url['protocol']=$url['scheme'].'://';
    $eol="\r\n";
 
    $headers2 =  "POST ".$url['protocol'].$url['host'].$url['path']." HTTP/1.0".$eol. 
                "Host: ".$url['host'].$eol. 
                "Referer: ".$url['protocol'].$url['host'].$url['path'].$eol. 
                "Content-Type: application/x-www-form-urlencoded".$eol. 
                "Content-Length: ".strlen($url['query']).$eol.
                $eol.$url['query'];
    $fp = fsockopen($url['host'], $url['port'], $errno, $errstr, 30); 
    if($fp) {
      fputs($fp, $headers2);
      $result = '';
      while(!feof($fp)) { $result .= fgets($fp, 128); }
      fclose($fp);
      if (!$headers) {
        //removes headers
        $pattern="/^.*\r\n\r\n/s";
        $result=preg_replace($pattern,'',$result);
      }
      return $result;
    }
}
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value; 
$baseUrl = 'http://togows.dbcls.jp/convert/' ;
$url = $baseUrl.$format.'?data="'. trim($data).'"'; 
echo $url."\n";
$result = file_post_contents($url);
var_dump($result);
$lineas = explode("\n", $result);
for ($i=0;$i<count($lineas);$i++) {
   if (trim($lineas[$i])!="")
     echo $lineas[$i]."\n"  ;
}   


$params = array('http' => array(
    'method' => 'POST',
    'content' => $data
));
$url = 'http://togows.dbcls.jp/convert/fasta.gff' ;
$ctx = stream_context_create($params);
$fp = @fopen($url, 'rb', false, $ctx);
if (!$fp)
{
    throw new Exception("Problem with $url, $php_errormsg");
}
$response = @stream_get_contents($fp);
if ($response === false) 
{
    throw new Exception("Problem reading data from $url, $php_errormsg");
} else var_dump($response);


$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $data
    )
);
$context  = stream_context_create($opts);
$result = file_get_contents('http://togows.dbcls.jp/convert/fasta.gff', false, $context);
var_dump($result);
?>   

<script>window.location.href =('http://togows.dbcls.jp/convert/fasta.gff?data=<?echo $data?>')</script>
  
</textarea>  
</BODY>
</HTML>