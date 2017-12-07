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
   $features = explode(',', $feature);
   $feature='';
   foreach($features as $f){
     $feature.='feature='.trim($f).';';
   } 
   // echo $feature; 
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
  if ($output=='Table') { 
   $service_url = 'http://rest.ensembl.org/overlap/id/'.$id.'?'.$feature.'content-type=application/json;expand=1' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $overlap = $json->decode($response);
   echo "</center>";
   //var_dump($overlap);
   echo "<center><table border=1   CELLSPACING=0 CELLPADDING=2>";
   echo "<tr class=tr_titulo><td colspan=17 >Overlap by ID";  
   echo "<tr class=tr_titulo0><td>Source<td>Logic Name<td>Feature<td>External Name<td>Description<td>Assembly<td>Parent 
                    <td colspan=2> E Phase<td>Biotype<td>Region Name<td>Strand<td>ID<td>Cons<td>Rank<td>Start<td>End  "; 
         
        for ($i=0; $i  < count($overlap);$i++) { 
              $overlap0=$overlap[$i];
              
              //var_dump($overlap0);
              echo "<tr class=td_titulo0>", 
                   
                   "<td valign=top> ",$overlap0->source,
                   "<td valign=top> ",$overlap0->logic_name,
                   "<td valign=top> ",$overlap0->feature_type,
                   "<td valign=top> ",$overlap0->external_name, 
                   "<td valign=top> ",$overlap0->description, 
                   "<td valign=top> ",$overlap0->assembly_name, 
                   "<td valign=top> ",$overlap0->parent,
                   "<td valign=top> ",$overlap0->ensembl_phase,  
                   "<td valign=top> ",$overlap0->ensembl_end_phase,  
                   "<td valign=top> ",$overlap0->biotype, 
                   "<td valign=top> ",$overlap0->seq_region_name, 
                   "<td valign=top> ",$overlap0->strand, 
                   "<td valign=top> ",$overlap0->id, 
                   "<td valign=top> ",$overlap0->constitutive, 
                   "<td valign=top> ",$overlap0->rank,   
                   "<td valign=top> ",$overlap0->start,
                   "<td valign=top> ",$overlap0->end  
                    ;
             
                
         }   
   echo "</table>"; 
   }
   if ($output=='gff3'){
   $service_url = 'http://rest.ensembl.org/overlap/id/'.$id.'?'.$feature.';content-type=application/gff3' ;
   $response = file_get_contents($service_url);
   //var_dump($response) ;
   $lines = explode("\n", $response);
   $lines0=array_pop($lines);
   $lines1=array_shift($lines);
   // var_dump($lines);
   $response0='';
   foreach($lines as $l){
       //echo $i.'<br>';
       $response0.=$l."\n";
   } 
?>
    <center>
  <form name=form method='POST' action="save.php " target=ff001>
  <font face='courier,courier new,monospace' size=2>
  <textarea name="textarea"   cols="110" rows="20">
<?   
     echo($response0);
?>
   </textarea>
<br>
<input type="button" value="Select" onclick="document.form.textarea.select()">
<input class='estilo004' type="Submit" value="Save to file" > <input class='estilo004' type="Text" name="file"  size="15" value="overlap.gff3">
</form> 
<?     
   }      
   if ($output=='bed'){
    $service_url = 'http://rest.ensembl.org/overlap/id/'.$id.'?'.$feature.';content-type=application/bed' ;
    $response = file_get_contents($service_url);
   //var_dump($response) ;
   $lines = explode("\n", $response);
   $lines0=array_pop($lines);
   $lines1=array_shift($lines);
   // var_dump($lines);
   $response0='';
   foreach($lines as $l){
       //echo $i.'<br>';
       $response0.=$l."\n";
   } 
?>
    <center>
  <form name=form method='POST' action="save.php " target=ff001>
  <font face='courier,courier new,monospace' size=2>
  <textarea name="textarea"   cols="110" rows="20">
<?   
     echo($response0);
?>
   </textarea>
<br>
<input type="button" value="Select" onclick="document.form.textarea.select()">
<input class='estilo004' type="Submit" value="Save to file" > <input class='estilo004' type="Text" name="file"  size="15" value="overlap.bed">
</form> 
<?     
   }        
?>  
  </BODY>
</HTML>
