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
        "</td></tr></table><br />";
    
   $service_url = 'http://rest.ensembl.org/feature/region/'.$species.'/'.$region.'?feature='.$feature000.';content-type=application/json' ;
    
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $features = $json->decode($response);
   echo "</center>";
   //var_dump($features);
    
   echo "<center><table border=1   CELLSPACING=0 CELLPADDING=2>";
   echo "<tr class=tr_titulo><td colspan=9 >Features by region";  
   if ($feature000=='gene')  
     echo "<tr class=tr_titulo0><td>ID<td>Source<td>Logic Name<td>External Name<td width=20%>Description<td>Biotype<td>Region "; 
   if ($feature000=='exon') 
      echo "<tr class=tr_titulo0><td> ID<td>Parent<td>Ens Phase<td>Ens End Phase<td>Constitutive<td>Rank<td>Region ";   
   if ($feature000=='cds') 
      echo "<tr class=tr_titulo0><td> ID<td>Parent<td>Phase<td>Rank<td>Region ";   
   if ($feature000=='transcript') 
      echo "<tr class=tr_titulo0><td> ID<td>Parent<td>Source<td>Logic Name<td>Description<td>Biotype<td>Region ";   
   if (($feature000=='repeat') ) 
      echo "<tr class=tr_titulo0><td>Description<td>Region "; 
   if (($feature000=='simple') )
      echo "<tr class=tr_titulo0><td>ID<td>Logic Name<td>External Name<td>Score<td>Region "; 
   if (($feature000=='misc') )
      echo "<tr class=tr_titulo0><td>ID<td>Name<td>Type<td>Ensembl Acc<td>Region "; 
   if (($feature000=='somatic_variation') or ($feature000=='variation'))  
      echo "<tr class=tr_titulo0><td>ID<td>Consequence Type<td>Alleles<td>Region "; 
      
      
   if (($feature000=='regulatory') or ($feature000=='somatic_structural_variation') or ($feature000==' structural_variation')) 
      echo "<tr class=tr_titulo0><td> ID<td>Region ";   
   if ($feature000=='constrained') 
      echo "<tr class=tr_titulo0><td> ID<td>Score<td>Region ";   
   for ($i=0; $i  < count($features);$i++) {
        $feature=$features[$i];
        $reg=$feature->seq_region_name.
              ":".$feature->start.
              "-".$feature->end.
              ":".$feature->strand;
        if (($feature000=='gene')  ) {
          echo "<tr class=td_titulo0>",
              "<td valign=top align=center> ",
              "<A HREF='rest0140.php?id=". $feature->ID. "' target=_blank title='Lookup by ID'>". $feature->ID ."</a>",
              "<br>",
              "<a HREF='http://rest.ensembl.org/sequence/id/".$feature->ID."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$species. "' target=_blank title='Sequence'>Sequence</a>", 
              "<td valign=top> ",$feature->source,
              "<td valign=top> ",$feature->logic_name,
              "<td valign=top> ",$feature->external_name,
              "<td valign=top> ",$feature->description,
              "<td valign=top> ",$feature->biotype,
              "<td valign=top  align=center> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand ,
              "<br> <A HREF='rest0050.php?region1=". $reg ."&species=".$species."&method=EPO&species_sg=mammals&format=clustal' target=_blank title='EPO Genomic Align for mammals'>Align Block</a>",
              "&nbsp;&nbsp;<A HREF='http://www.ensembl.org/".$species."/Location/View?r=". $reg. "' target=_blank title='EnsEmbl View'>EnsEmbl</a>"
               ;
         }
         if (  ($feature000=='transcript')) {
          echo "<tr class=td_titulo0>",
              "<td valign=top align=center> ",
              "<A HREF='rest0140.php?id=". $feature->ID. "' target=_blank title='Lookup by ID'>". $feature->ID ."</a>",
            
                "<br>",
              "<a HREF='http://rest.ensembl.org/sequence/id/".$feature->ID."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$species. "' target=_blank title='Sequence'>Sequence</a>", 
  
              "<td valign=top> ",$feature->Parent,
              "<td valign=top> ",$feature->source,
              "<td valign=top> ",$feature->logic_name,
              "<td valign=top> ",$feature->description,
              "<td valign=top> ",$feature->biotype,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand,
               "<br> <A HREF='rest0050.php?region1=". $reg ."&species=".$species."&method=EPO&species_sg=mammals&format=clustal' target=_blank title='EPO Genomic Align for mammals'>Align Block</a>",
              "&nbsp;&nbsp;<A HREF='http://www.ensembl.org/".$species."/Location/View?r=". $reg. "' target=_blank title='EnsEmbl View'>EnsEmbl</a>"
               ;
         }
         if ($feature000=='exon') {
          echo "<tr class=td_titulo0>",
             "<td valign=top align=center> ",$feature->ID,
                "<br>",
              "<a HREF='http://rest.ensembl.org/sequence/id/".$feature->ID."?content-type=text/x-fasta;type=genomic;multiple_sequences=yes;species=".$species. "' target=_blank title='Sequence'>Sequence</a>", 
  
              "<td valign=top> ",$feature->Parent,
              "<td valign=top> ",$feature->ensembl_phase,
              "<td valign=top> ",$feature->ensembl_end_phase,
              "<td valign=top> ",$feature->constitutive,
              "<td valign=top> ",$feature->rank,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand,
              "<br> <A HREF='rest0050.php?region1=". $reg ."&species=".$species."&method=EPO&species_sg=mammals&format=clustal' target=_blank title='EPO Genomic Align for mammals'>Align Block</a>",
              "&nbsp;&nbsp;<A HREF='http://www.ensembl.org/".$species."/Location/View?r=". $reg. "' target=_blank title='EnsEmbl View'>EnsEmbl</a>"
               ;
         }
         if ($feature000=='cds') {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->ID,
              "<td valign=top> ",$feature->Parent,
              "<td valign=top> ",$feature->phase,
              "<td valign=top> ",$feature->rank,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand
               ;
         }
         if (($feature000=='repeat') ) {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->description,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand
               ;
         }
         if (($feature000=='simple') ) {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->ID,
              "<td valign=top> ",$feature->logic_name,
              "<td valign=top> ",$feature->external_name,
              "<td valign=top align=right> ",$feature->score,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand
               ;
         }
         if (($feature000=='misc') ) {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->ID,
              "<td valign=top> ",$feature->name,
              "<td valign=top> ",$feature->type,
              "<td valign=top > ",$feature->embl_acc,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand
               ;
         }
         
         if (($feature000=='somatic_variation') or ($feature000=='variation')) {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->ID,
              "<td valign=top> ",$feature->consequence_type;
          $alt_alleles=$feature->alt_alleles;  
          echo "<td >";
          echo "<font face='courier,courier new,monospace' size=2><b>";
          for ($j=0;$j<count($alt_alleles);$j++) {
             $alt_allele=$alt_alleles[$j];
             $l_as=strlen($alt_allele); 
             $l_as0=0;
             while ($l_as0 < $l_as) {      
                echo substr($alt_allele,$l_as0,60)."<br />";
                $l_as0=$l_as0 + 60;
             };  
             
          } 
          echo  "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand
               ;
         }
         
         if ($feature000=='constrained') {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->ID,
              "<td valign=top align=right> ",$feature->score,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand
               ;
         }
         if (($feature000=='regulatory') or ($feature000=='somatic_structural_variation') or ($feature000=='structural_variation')) {
          echo "<tr class=td_titulo0>",
              "<td valign=top> ",$feature->ID,
              "<td valign=top> ",$feature->seq_region_name,
              ":",$feature->start,
              "-",$feature->end,
              ":",$feature->strand,
               "<br> <A HREF='rest0050.php?region1=". $reg ."&species=".$species."&method=EPO&species_sg=mammals&format=clustal' target=_blank title='EPO Genomic Align for mammals'>Align Block</a>",
              "&nbsp;&nbsp;<A HREF='http://www.ensembl.org/".$species."/Location/View?r=". $reg. "' target=_blank title='EnsEmbl View'>EnsEmbl</a>"
               ;
         }
   };
   echo "</table>";             
?>  
  </BODY>
</HTML>
