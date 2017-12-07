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
  <form name=form method='POST' action="save.php " target=ff001>
  <font face='courier,courier new,monospace' size=2>
  <textarea name="textarea"   cols="110" rows="29" wrap=OFF>
<?php
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value; 
$baseUrl = 'http://togows.dbcls.jp/entry';
$url = "$baseUrl/" . $db . '/' . $id.$format;
//echo $url."\n";
$result = file_get_contents($url);
$lineas = explode("\n", $result);
for ($i=0;$i<count($lineas);$i++) {
   if (trim($lineas[$i])!="")
     echo $lineas[$i]."\n"  ;
}   
?>   
</textarea>  
<br>
<input type="button" value="Select" onclick="document.form.textarea.select()">
<input class='estilo004' type="Submit" value="Save to file" > <input class='estilo004' type="Text" name="file"  size="15" value="togows.txt">
</form>
</BODY>
</HTML>