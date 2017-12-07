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
    <link rel=stylesheet href="../a.css" type="text/css">
   
   </HEAD>
  <BODY   topmargin="0" leftmargin="0" rightmargin=0>
  <center>
  <font face='courier,courier new,monospace' size=2>
  <textarea name="texttocopy"   cols="90" rows="31">
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value; 
   $service_url = 'http://rest.ensembl.org/sequence/id/'.$id.'?content-type=application/json;type='.$type.';multiple_sequences='.$multiple_sequences.';object_type='.$object_type.';db_type='.$db_type.';species='.$species;
   //echo $service_url;
   //$service_url = 'http://beta.rest.ensembl.org/sequence/id/'.$id.'?content-type=application/json;object_type=predictiontranscript;db_type=core;species=homo_sapiens;type=protein';
   //$service_url = 'http://beta.rest.ensembl.org/sequence/id/GENSCAN00000000001?content-type=application/json;object_type=predictiontranscript;db_type=core;species=homo_sapiens;type=protein';
   //$response = file_get_contents($service_url);
   //$json = new Services_JSON();
   //$sequence = $json->decode($response);
   //$id=$sequence->id;
   //$seq=$sequence->seq;
   //$molecule=$sequence->molecule;
   //echo '>'.$id.'|'.$molecule.'\n';
   //$l_as=strlen($seq); 
   //       $l_as0=0;
   //       while ($l_as0 < $l_as) {      
   //             echo substr($seq,$l_as0,50)."\n";
   //             $l_as0=$l_as0 + 50;
   //       };  
?> 
</textarea>  

   <script>window.location.href =('http://rest.ensembl.org/sequence/id/<?echo $id?>?content-type=text/x-fasta;type=<?echo $type?>;multiple_sequences=<?echo $multiple_sequences?>;object_type=<?echo $object_type?>;db_type=<?echo $db_type?>;species=<?echo $species?>')</script>

  </BODY>
</HTML>
