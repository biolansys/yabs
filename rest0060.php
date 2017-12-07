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
    <STYLE type="text/css">
      A:link    {font-size:12;font-family:verdana;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:visited {font-size:12;font-family:verdana;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:active  {font-size:12;font-family:verdana;text-decoration:none;color:white;border-style: groove ;border-width: 0px 0px 0px 0px}
      A:hover   {font-size:12;font-family:verdana;text-decoration:none;color:white;border-style: groove ;border-width: 0px 0px 0px 0px}
       .td0     {background:rgb(0,102,153)}  
       .td2     {background:rgb(112,128,144)}  
       .td1     {background:rgb(255,255,255);width:1px;font-family : verdana, arial, helvetica, sans-serif;font-size : 1pt; }  
       .cuerpo  {background: white url(imagenes/gradienteazul30.jpg) left center repeat-x;}   
       .Boxmain { BORDER: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;} 
    </STYLE>  
  
  </HEAD>
  <BODY  topmargin="0" leftmargin="0" rightmargin=0>
  
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value;  
   $service_url = 'http://rest.ensembl.org/alignment/slice/region/'.$region0.'/'.$region1.'?content-type=application/json;species_set_group='.$species;
/*
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
*/
$response = file_get_contents($service_url);
$json = new Services_JSON();
$decoded = $json->decode($response);

echo "<table border=1 CELLSPACING=0 CELLPADDING=2 class=tabla0>";
echo "<tr><td>Strand<td>Region<td>Specie<td>Description<td>Sequence<td>Start<td>End";
for ($i=0; $i  < count($decoded);$i++) {
    $decoded0=$decoded[$i];
    //var_dump($decoded0);
    for ($j=0; $j  < count($decoded0);$j++)  {
       $decoded00=$decoded0[$j];
       $seq=var_export($decoded00->seq,true);
       $seq=$decoded00->seq;
       echo "<tr>",
              "<td align=right> ",$decoded00->strand,
              "<td> ",$decoded00->seq_region,
              "<td> ",$decoded00->species,
              "<td> ",$decoded00->description,
              "<td> ",$seq,
              "<td align=right> ",$decoded00->start,
              "<td align=right> ",$decoded00->end,
        "</td></tr>";
    }   
}   
   
?>  
</table>
  </BODY>
</HTML>
