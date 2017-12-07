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
   
   $service_url = 'http://rest.ensembl.org/info/species?content-type=application/json' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $species = $json->decode($response);
  
   $species0=$species->species;
   //var_dump($species0);
   
 
echo "<table border=1 CELLSPACING=0 CELLPADDING=2  >";
   echo "<tr class=tr_titulo ><td colspan=4 >API's INFO";
   echo "<tr class=td_titulo0>",
              "<td  align=right>REST API Release: <td> ",$version_rest->release,
              "<td  align=right>EnsEmbl API Release: <td> ",$version_ense->release,
        "</td></tr></table><br />";

echo "<table border=1 CELLSPACING=0 CELLPADDING=2 class=tabla0>";
echo "<tr class=tr_titulo><td colspan=5  ><b>Species";  
echo "<tr class=tr_titulo0><td  >Division<td>Release<td>Name<td>Groups<td>Aliases"; 
       
    for ($i=0; $i  < count($species0);$i++) {   
       $species00=$species0[$i];
       $groups=$species00->groups;
       $aliases=$species00->aliases;
       echo "<tr class=td_titulo0>",
              "<td valign=top> ",$species00->division,
              "<td valign=top> ",$species00->release,
              "<td valign=top> ",$species00->name;
       echo "<td valign=top>";
       echo "<table border=0 CELLSPACING=0 CELLPADDING=2>";
       for ($j=0; $j  < count($groups);$j++) { 
          echo "<tr class=td_titulo0><td  > ", $groups[$j]; 
       }
       echo "</table>";   
       
       echo "<td valign=top>";
       echo "<table border=0 CELLSPACING=0 CELLPADDING=2>";
       for ($j=0; $j  < count($aliases);$j++) { 
          echo  "<tr class=td_titulo0><td  > ",$aliases[$j]; 
       }
       echo "</table>";          
       
}        
 echo "</table><br></center>";    
 
    
?>  
  </BODY>
</HTML>
