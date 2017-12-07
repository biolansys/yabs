<?  
foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value;  
header("Pragma: public");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename= ".$fna);
header("Content-Transfer-Encoding: binary ");
   require_once 'JSON.php';
   if(isset($_POST['ancestral']) && $_POST['ancestral'] == 'on') $ancestral0='Yes';
   else  {$ancestral0='No';}
   
   if (isset($species_sg)) $service_url = 'http://rest.ensembl.org/alignment/block/region/'.trim($species).'/'.trim($region1).'?content-type=application/json;species_set_group='.trim($species_sg).';method='.trim($method);
   if (isset($species_s) and trim($species_s)<>'') $service_url = 'http://rest.ensembl.org/alignment/block/region/'.trim($species).'/'.trim($region1).'?content-type=application/json;species_set='.trim($species_s).';method='.trim($method);
 
$response = file_get_contents($service_url);
$json = new Services_JSON();
$decoded = $json->decode($response);

$k=0;
  for ($i=0; $i  < count($decoded);$i++) {
    $decoded0=$decoded[$i];
    for ($j=0; $j  < count($decoded0);$j++)  {
       $decoded00=$decoded0[$j];
       $seq=var_export($decoded00->seq,true);
       $seq=$decoded00->seq;
       $species=$decoded00->species;
       if ( ($species!='ancestral_sequences')  or (($ancestral0=='Yes'))   )
       {
       $seq_name[$k]= ">".$k."|".
              $decoded00->species.
              "|".$decoded00->description.
              "|".$decoded00->seq_region.
              "|".$decoded00->start.
              "-".$decoded00->end.
              "|".$decoded00->strand;
       $seq_name[$k]=substr($seq_name[$k],0,30);       
       $seq_seq[$k]=$seq;
       $l_as=strlen($seq); 
       $k++;        
      } 
    }   
  } 
   
  $salida="";
  $l_as1=0;
  while ($l_as1 < $l_as) {   
    for ($j=0; $j  < $k;$j++)  {
        $seq_seq0=substr($seq_seq[$j],$l_as1,50);
        if ($l_as1<49) $salida.= $seq_name[$j]." ";
        else           $salida.= str_repeat(" ",31);
        $l_as0=0;
        while ($l_as0 < 50) {      
          $salida.=  substr($seq_seq0,$l_as0,10)." ";
          $l_as0=$l_as0 + 10;
        };  
        $salida.= pack( "C2",13,10);
    }
    $salida.= pack( "C2",13,10);
    $l_as1=$l_as1 + 50;
  }  
  $cabecera=$k." ".$l_as;
  $salida0=$cabecera.pack( "C2",13,10).$salida ;
  echo $salida0;

 
  
?>  
 
