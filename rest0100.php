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
   
  <br />
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value;  
   $service_url = 'http://rest.ensembl.org/homology/id/'.trim($id).'?content-type=application/json;sequence='.trim($sequence).
                  ';type='.trim($type) ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $homology = $json->decode($response);
   $homology0=$homology->data;
   //var_dump($homology0);
   
   echo "<center><table border=1 CELLSPACING=0 CELLPADDING=2>";
   echo "<tr class=tr_titulo><td colspan=6  > Homolgy by ID";  
   echo "<tr class=tr_titulo0><td  >Type <br> Subtype<br>  Method<br> Dn Ds<td>Source<td>Target";  
   for ($i=0;$i<count($homology0);$i++) {
       $homology00=$homology0[$i]->homologies;
       //var_dump($homology00);
       for ($j=0;$j<count($homology00);$j++) {
          $homology000=$homology00[$j];
          $source=$homology000->source;
            $perc_pos=$source->perc_pos;
            $protein_id=$source->protein_id;
            if ($sequence<>'none') $align_seq=$source->align_seq;
            else $align_seq='';
            $perc_id=$source->perc_id;
            $cigar_line=$source->cigar_line;
            $species=$source->species;
            $id=$source->id;
          $dn_ds=$homology000->dn_ds;
          $target=$homology000->target;
            $perc_pos0=$target->perc_pos;
            $protein_id0=$target->protein_id;
            if ($sequence <>'none') $align_seq0=$source->align_seq;
            else $align_seq0='';
            $perc_id0=$target->perc_id;
            $cigar_line0=$target->cigar_line;
            $species0=$target->species;
            $id0=$target->id;
          $subtype=$homology000->subtype;
          $type=$homology000->type;
          $mlt=$homology000->method_link_type;
          echo "<tr class=td_titulo0><td valign=top>".$type."<br> ".$subtype."<br> ".$mlt." <br>".$dn_ds."<td>".
                //$perc_pos."<br />".
                $protein_id."<br />".
                //$perc_id."<br />".
                "<font face='courier,courier new,monospace' size=2><b>";
          $l_as=strlen($align_seq); 
          $l_as0=0;
          while ($l_as0 < $l_as) {      
                echo substr($align_seq,$l_as0,50)."<br />";
                $l_as0=$l_as0 + 50;
          };  
           
          echo  "</font></b>".   
                //$cigar_line."<br />".
                $species." ".
                $id." ";
          echo      
                "<td>".
                //$perc_pos0."<br />".
                $protein_id0."<br />".
                //$perc_id0."<br />".
                 "<font face=monospace size=3><b>";
          $l_as=strlen($align_seq0); 
          $l_as0=0;
          while ($l_as0 < $l_as) {      
                echo substr($align_seq0,$l_as0,50)."<br />";
                $l_as0=$l_as0 + 50;
          }; 
                
          echo "</font></b>".       
                
                //$cigar_line0."<br />".
                $species0." ".
                $id0." "
                ;
       }   
   } 
?>  
 <table>
  </BODY>
</HTML>
