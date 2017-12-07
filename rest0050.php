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
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value; 
   
   //echo $ancestral;
   if(isset($_POST['ancestral']) && $_POST['ancestral'] == 'Yes') $ancestral0='Yes';
   else  {$ancestral0='No';}
   // echo $ancestral0;
   if (isset($species_sg)) $service_url = 'http://rest.ensembl.org/alignment/region/'.trim($species).'/'.trim($region1).'?content-type=application/json;species_set_group='.trim($species_sg).';method='.trim($method);
   if (isset($species_s) and trim($species_s)<>'') $service_url = 'http://rest.ensembl.org/alignment/region/'.trim($species).'/'.trim($region1).'?content-type=application/json;species_set='.trim($species_s).';method='.trim($method);
   //echo $service_url;
/*
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
*/
$response = file_get_contents($service_url);
//echo $response;
$json = new Services_JSON();
$decoded = $json->decode($response);
//echo '<br>Decoded:'.count($decoded).'<br>';
if (count($decoded)==0) {
      echo "<br><center><table border=0  CELLSPACING=3 CELLPADDING=3 class=tabla>";
      echo "<tr class=tr_titulo ><td align=center><b> Not found Genomic Align Blocks   </td></tr>"; 
      echo "</table>";
      echo "</html></body> \n"; 
   exit;
}
if ($format=='table'){
  //echo 'Table<br>';
  echo "<center><table border=1 CELLSPACING=0 CELLPADDING=2 class=tabla0>";   
  echo "<tr class=tr_titulo><td colspan=7 align=center> Genomic Align by Block";  
  echo "<tr class=tr_titulo0><td>Strand<td>Region<td>Specie<td>Description<td>Sequence<td>Start<td>End";
  for ($i=0; $i  < count($decoded);$i++) {
    $decoded1=$decoded[$i];
    echo '<tr><td>';
    //var_dump($decoded1);
    //echo '<tr><td>Count decoded0= '.count($decoded0);
    $tree=var_export($decoded1->tree,true);
    echo '<tr><td >tree<td colspan=6>'.$tree;
    //$decoded2=var_export($decoded1->alignments,true); 
    $decoded0=$decoded1->alignments;
    for ($j=0; $j  < count($decoded0);$j++)  {
       $decoded00=$decoded0[$j];
       //echo '<tr><td>';
       //var_dump($decoded00);
        
       //$seq=var_export($decoded00->seq,true);
       $seq=$decoded00->seq;
       //$species=$decoded00->species;
       if ( ($species!='ancestral_sequences')  or (($ancestral0=='Yes'))   )
       {
       echo "<tr class=td_titulo0>",
              "<td align=right valign=top> ",$decoded00->strand,
              "<td valign=top> ",$decoded00->seq_region,
              "<td valign=top> ",$decoded00->species,
              "<td valign=top> ",$decoded00->description,
              "<td> ";
       echo "<font face='courier,courier new,monospace' size=2><b>";
       $l_as=strlen($seq); 
       $l_as0=0;
       while ($l_as0 < $l_as) {      
                echo substr($seq,$l_as0,50)."<br />";
                $l_as0=$l_as0 + 50;
       };  
       echo  "</font></b>";         
       echo       
              "<td align=right valign=top> ",$decoded00->start,
              "<td align=right valign=top> ",$decoded00->end,
        "</td></tr>";
      }  
    }   
  } 
  echo "</table>" ;   
}

if ($format=='clustal'){
  $k=0;
  echo "<center><font face='courier,courier new,monospace' size=2><form  name=form > <textarea  name=arbol   cols='90' rows='26'>"; 
  for ($i=0; $i  < count($decoded);$i++) {
    $decoded0=$decoded[$i];
    //var_dump($decoded0);
    for ($j=0; $j  < count($decoded0);$j++)  {
       $decoded00=$decoded0[$j];
       $seq=var_export($decoded00->seq,true);
       $seq=$decoded00->seq;
       $species=$decoded00->species;
       if ( ($species!='ancestral_sequences')  or (($ancestral0=='Yes'))   )
       {
       echo ">",$k,"|",
              $decoded00->species,
              "|",$decoded00->description,
              "|",$decoded00->seq_region,
              "|",$decoded00->start,
              "-",$decoded00->end,
              "|",$decoded00->strand,
              "\n";
       $k++;       
       $l_as=strlen($seq); 
       $l_as0=0;
       while ($l_as0 < $l_as) {      
                echo substr($seq,$l_as0,70)."\n";
                $l_as0=$l_as0 + 70;
       };  
       echo  "\n";         
      } 
    }   
  } 
  echo '</textarea><br><input type="button" value="Select" onclick="document.form.arbol.select()"></form>' ; 
}

if ($format=='iphylip'){
  $k=0;
  echo "<center><table border=1 CELLSPACING=0 CELLPADDING=10 class=tabla0>";   
  echo "<tr  ><td  >  "; 
  echo "<font face='courier,courier new,monospace' size=2><b>"; 
  for ($i=0; $i  < count($decoded);$i++) {
    $decoded0=$decoded[$i];
    //var_dump($decoded0);
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
  $cabecera=$k." ".$l_as."<br />";
  
  echo $cabecera;
  $l_as1=0;
  while ($l_as1 < $l_as) {   
    for ($j=0; $j  < $k;$j++)  {
        $seq_seq0=substr($seq_seq[$j],$l_as1,50);
        if ($l_as1<49) echo $seq_name[$j]." ";
        else           echo str_repeat("&nbsp;",31);
        $l_as0=0;
        while ($l_as0 < 50) {      
          echo substr($seq_seq0,$l_as0,10)." ";
          $l_as0=$l_as0 + 10;
        };  
        echo "<br />";
    }
    echo "<br />";
    $l_as1=$l_as1 + 50;
  }  
  echo "</table>" ; 
}

if ($format=='phylip'){
  $k=0;
  $salida="";
  for ($i=0; $i  < count($decoded);$i++) {
    $decoded0=$decoded[$i];
    for ($j=0; $j  < count($decoded0);$j++)  {
       $decoded00=$decoded0[$j];
       $seq=var_export($decoded00->seq,true);
       $seq=$decoded00->seq;
       $species=$decoded00->species;
       if ( ($species!='ancestral_sequences')  or (($ancestral0=='Yes'))   )
       {
       $secuencia= ">".$k."|".
              $decoded00->species.
              "|".$decoded00->description.
              "|".$decoded00->seq_region.
              "|".$decoded00->start.
              "-".$decoded00->end.
              "|".$decoded00->strand.
              " ";
       if (strlen($secuencia)>20) $secuencia=substr($secuencia,0,20)." ";
       $salida.=$secuencia;       
       $k++;       
       $l_as=strlen($seq); 
       $l_as0=0;
       $l=0;
       while ($l_as0 < $l_as) {      
                $salida.= substr($seq,$l_as0,10)." ";
                $l_as0=$l_as0 + 10;
                $l=$l+10;
                if ($l>=49) {
                   $salida.="<br />" .str_repeat("&nbsp;",strlen($secuencia)) ;
                   $l=0;
                }   
       };  
       $salida.=  "<br />";         
      } 
    }   
  } 
  $cabecera=$k." ".$l_as;
  $salida0= "<center><table border=1 CELLSPACING=0 CELLPADDING=10 class=tabla0>";  
  $salida0.="<tr><td><font face='courier,courier new,monospace' size=2><b>".
            $cabecera."<br />  "; 
  
  $salida0.=$salida. "</td></tr></table>" ;
  echo $salida0;
}


if ($format=='file'){
 $comando="rest0051.php?fna=".$fna."&species=".$species."&region1=".$region1."&method=".$method."&species_sg=".$species_sg."&species_s=".$species_s; 
?> 
 <script>window.location.href =("<?echo $comando?>")</script> 
<?
}
 
if ($format=='pfile'){
 $comando="rest0052.php?fna=".$fna."&species=".$species."&region1=".$region1."&method=".$method."&species_sg=".$species_sg."&species_s=".$species_s; 
?> 
 <script>window.location.href =("<?echo $comando?>")</script> 
<?
}

if ($format=='ipfile'){
 $comando="rest0053.php?fna=".$fna."&species=".$species."&region1=".$region1."&method=".$method."&species_sg=".$species_sg."&species_s=".$species_s; 
?> 
 <script>window.location.href =("<?echo $comando?>")</script> 
<?
 }
?>  
  </BODY>
</HTML>

