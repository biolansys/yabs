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
    
   $service_url = 'http://rest.ensembl.org/info/external_dbs/'.$specie.'?content-type=application/json' ;
 
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $ext_dbs = $json->decode($response);
   //var_dump ($ext_dbs);
   echo "</center>";
   echo "<center><table border=1 width=100% CELLSPACING=0 CELLPADDING=2>";
   echo "<tr class=tr_titulo><td colspan=9 >External DBS";  
   echo "<tr class=tr_titulo0><td>DBS Name<td>Release<td>Description<td>DB Display Name"; 
   for ($i=0; $i  < count($ext_dbs);$i++) {
        $ext_dbs0=$ext_dbs[$i];
        echo "<tr class=td_titulo0>",
              "<td valign=top><b> ",$ext_dbs0->name,
              "<td valign=top> ",$ext_dbs0->release,
              "<td valign=top> ",$ext_dbs0->description,
              "<td valign=top> ",$ext_dbs0->display_name,
              "<td>";
       $synonyms= $ext_ref0->synonyms;
       for ($j=0; $j  < count($synonyms);$j++) { 
           echo $synonyms[$j],"<br>";
       }      
   };
   echo "</table>";             
?>  
  </BODY>
</HTML>
