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
    <link rel=stylesheet href="../a0.css" type="text/css">
     
  
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
   
   echo "<table border=1 CELLSPACING=0 CELLPADDING=2  >";
   echo "<tr class=tr_titulo ><td colspan=4 >API's INFO";
   echo "<tr class=td_titulo0>",
              "<td  align=right>REST API Release: <td> ",$version_rest->release,
              "<td  align=right>EnsEmbl API Release: <td> ",$version_ense->release,
        "</td></tr></table><br />";
   
   $service_url = 'http://rest.ensembl.org/info/compara/species_sets/'.$method.'?content-type=application/json' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $compara_ss = $json->decode($response);
   //var_dump($compara_ss);
   echo "<center><table border=1 CELLSPACING=0 CELLPADDING=2>";
   echo "<tr class=tr_titulo><td colspan=4 align=center> Species set linked to Compara Method";  
   echo "<tr class=tr_titulo0><td  >Group<td>Name<td>Method<td>Species"; 
   for ($i=0;$i<count($compara_ss);$i++) {
      $compara_ss0=$compara_ss[$i];
      echo  "<tr class=td_titulo0><td  valign=top> ",$compara_ss0->species_set_group; 
      echo  " <td  valign=top> ",$compara_ss0->name; 
      echo  " <td  valign=top> ",$compara_ss0->method; 
      echo  " <td  valign=top> ";
      echo " <table border=0 CELLSPACING=0 CELLPADDING=2>";
      $species_set=$compara_ss0->species_set; 
      asort($species_set);
      foreach ($species_set  as $key => $val) {
         echo  "<tr class=td_titulo0><td  > ",$val;
      }
       
       echo "</table>";     
   }
   echo "</table>";             
?>  
  </BODY>
</HTML>
