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
    
   $service_url = 'http://rest.ensembl.org/lookup/id/'.$id.'?content-type=application/json;expand=1' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $lookup = $json->decode($response);
   echo "</center>";
   //var_dump($lookup);
   // Hay algunos campos que no aparecen en todos los registros. Estos no se muestran 
   echo "<center><table border=1   CELLSPACING=0 CELLPADDING=2>";
   echo "<tr class=tr_titulo><td colspan=9 >Lookup by ID";  
   echo "<tr class=tr_titulo0><td>Object Type<td>DB Type<td>Species<td>ID<td>"; 
   echo "<tr class=td_titulo0>",
              "<td valign=top> ",$lookup->object_type,
              "<td valign=top> ",$lookup->db_type,
              "<td valign=top> ",$lookup->species,
              "<td valign=top> ",
               "<a HREF='http://rest.ensembl.org/sequence/id/".$lookup->id."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$lookup->species. "' target=_blank title='Sequence'>".$lookup->id."</a>" 
                    ;
        $transcript=$lookup->Transcript;  
        for ($i=0; $i  < count($transcript);$i++) { 
              $transcript0=$transcript[$i];
              //var_dump($transcript0);
              echo "<tr class=td_titulo0>", 
                   "<td valign=top> ",$transcript0->object_type,
                   "<td valign=top> ",$transcript0->db_type,
                   "<td valign=top> ",$transcript0->species,
                   "<td valign=top> ", 
                   "<a HREF='http://rest.ensembl.org/sequence/id/".$transcript0->id."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$transcript0->species. "' target=_blank title='Sequence'>".$transcript0->id."</a>" 
                   ;
              echo "<td valign=top><table border=0  CELLSPACING=0 CELLPADDING=2>";
              echo "<tr class=tr_titulo0><td>Object Type<td>DB Type<td>Species<td>ID ";  
              $translation=$transcript0->Translation; 
               echo  "<tr class=td_titulo0><td valign=top> ", $translation->object_type,
                   "<td valign=top> ",$translation->db_type,
                   "<td valign=top> ",$translation->species,
                   "<td valign=top> ",
                   "<a HREF='http://rest.ensembl.org/sequence/id/".$translation->id."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$translation->species. "' target=_blank title='Sequence'>".$translation->id."</a>" 
                    ;
              $exons=$transcript0->Exon;
              //var_dump($exons); 
              for ($j=0; $j  < count($exons);$j++) { 
                   $exon=$exons[$j];
                   echo  "<tr class=td_titulo0><td valign=top> ", $exon->object_type,
                   "<td valign=top> ",$exon->db_type,
                   "<td valign=top> ",$exon->species,
                   "<td valign=top> ",
                    "<a HREF='http://rest.ensembl.org/sequence/id/".$exon->id."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$exon->species. "' target=_blank title='Sequence'>".$exon->id."</a>" 
                  
                   ;
              } 
              echo "</table>"; 
              
                
         }   
   echo "</table>";             
?>  
  </BODY>
</HTML>
