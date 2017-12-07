<HTML height=100%>
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
  <BODY  topmargin="0" leftmargin="0" rightmargin=0 height=100%>
  <center>
   <form name=form  method='POST' action="save.php " target=ff001>
  <font face='courier,courier new,monospace' size=2>
   
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value; 
   $feature000=$feature; 
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
        "</td></tr></table>";
    
   $service_url = 'http://rest.ensembl.org/feature/region/'.$species.'/'.$region.'?feature='.$feature000.';content-type=text/x-gff3' ;
   $response = file_get_contents($service_url);
  
   echo "</center>";
   //var_dump($features);
    
      
   
?>  
   <center>
   <form name=form  method='POST' action="save.php " target=ff001>
  <font face='courier,courier new,monospace' size=2>
     <textarea name="textarea"   cols="110" rows="26" wrap=off><?echo $response?></textarea> 
     <br>
<input type="button" value="Select" onclick="document.form.textarea.select()">
<input class='estilo004' type="Submit" value="Save to file" > <input class='estilo004' type="Text" name="file"  size="15" value="features.gff3">
</form> 
  </BODY>
</HTML>
