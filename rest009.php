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
  <center>
  <br />
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value;  
   $service_url = 'http://rest.ensembl.org/info/rest?content-type=application/json' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $version_rest = $json->decode($response);
   
   $service_url = 'http://rest.ensembl.org/info/software?content-type=application/json' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $version_ense = $json->decode($response);
   
   echo "<table border=1 CELLSPACING=0 CELLPADDING=2 class=tabla0>";
   echo "<tr><td colspan=2 align=center><b>API's INFO";
   echo "<tr>",
              "<td  >REST API Release <td> ",$version_rest->release,
              "<tr><td  >EnsEmbl API Release <td> ",$version_ense->release,
        "</td></tr></table><br /></center>";
    
   $service_url = 'http://rest.ensembl.org/info/compara/methods/?content-type=application/json' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $compara_m = $json->decode($response);
   var_dump($compara_m);
 
/*   
   echo "<center><table border=1 CELLSPACING=0 CELLPADDING=2>";
   echo "<tr><td colspan=4 align=center><b>Species set linked to Compara Method";  
   echo "<tr><td  >Group<td>Name<td>Method<td>Species"; 
   for ($i=0;$i<count($compara_ss);$i++) {
      $compara_ss0=$compara_ss[$i];
      echo  "<tr><td  valign=top> ",$compara_ss0->species_set_group; 
      echo  " <td  valign=top> ",$compara_ss0->name; 
      echo  " <td  valign=top> ",$compara_ss0->method; 
      echo  " <td  valign=top> ";
      echo " <table border=0 CELLSPACING=0 CELLPADDING=2>";
      $species_set=$compara_ss0->species_set; 
      for ($j=0;$j<count($species_set);$j++) {
         echo  "<tr><td  > ",$species_set[$j]; 
      }
       echo "</table>";     
   }
   echo "</table>";  
*/              
?>  
  </BODY>
</HTML>
