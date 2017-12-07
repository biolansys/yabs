<HTML>
  <HEAD>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>biolansys ensembl REST    </title>
    <meta itemprop="name" content="bioinformatica bioinformatics biocomputacion ">
    <meta itemprop="description" content="Pagina web de bioinform�tica">
    <META NAME="Title" CONTENT="LanSys ">
    <META NAME="Author" CONTENT="Jos� Lanzos G�mez">
    <META NAME="Subject" CONTENT="bioinformatica bioinformatics ">
    <META NAME="Description" CONTENT="P�gina web biolansys">
    <META NAME="Keywords" CONTENT="bioinformatica bioinformatics biocomputacion sequence align genoma genes biology biologia ">
    <META NAME="Language" CONTENT="Castellano">
    <META NAME="Copyright" CONTENT="� LanSys Sistemas S.A.">
    <META NAME="Designer" CONTENT="J.Lanzos">
    <META NAME="Distribution" CONTENT="Global">
    <link rel=stylesheet href="../a.css" type="text/css">
    <STYLE type="text/css">
      A:link    {font-size:12;font-family:verdana;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:visited {font-size:12;font-family:verdana;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:active  {font-size:12;font-family:verdana;text-decoration:none;color:white;border-style: groove ;border-width: 0px 0px 0px 0px}
      A:hover   {font-size:12;font-family:verdana;text-decoration:none;color:white;border-style: groove ;border-width: 0px 0px 0px 0px}
       .td0     {background:rgb(0,102,153)}  
       .td2     {background:rgb(112,128,144)}  
       .td1     {background:rgb(255,255,255);width:1px;font-family : verdana, arial, helvetica, sans-serif;font-size : 1pt; }  
       .cuerpo  {background: white url(imagenes/gradienteazul30.jpg) left center repeat-x;}   
       .Boxmain { BORDER: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;} 
    </STYLE>  
    
  </HEAD>
  <BODY   topmargin="0" leftmargin="0" rightmargin=0>
  <center>
  <form name=form method='POST' action="save.php " target=ff001>
  <font face='courier,courier new,monospace' size=2>
  <textarea name="textarea"   cols="90" rows="29">
<?  
   require_once 'JSON.php';
   foreach($_POST as $var => $value) $$var = $value;
   foreach($_GET  as $var => $value) $$var = $value; 
   $service_url = 'http://rest.ensembl.org/variation/'.$species.'/'.$id.'?content-type=application/json;pops=1' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $sequence = $json->decode($response);
   $source=$sequence->source;
   $mappings=$sequence->mappings;
   $name=$sequence->name;
   $MAF=$sequence->MAF;
   $source=$sequence->source;
   $ambiguity=$sequence->ambiguity;
   $populations=$sequence->populations;
   $var_class=$sequence->var_class;
   $synonyms=$sequence->synonyms;
   $evidence=$sequence->evidence;
   $ancestral_allele=$sequence->ancestral_allele; 
   $most_severe_consequence=$sequence->most_severe_consequence; 
   echo "Source: ".$source."\n";
   echo "Name: ".$name."\n";
   echo "MAF: ".$MAF."\n";
   echo "Ambiguity: ".$ambiguity."\n";  
   echo "Var class: ".$var_class."\n";  
   echo "Ancestral allele: ".$ancestral_allele."\n";  
   echo "Most severe consequence: ".$most_severe_consequence."\n";  
   //var_dump($mappings[0]);
   echo "Mappings Location: ".$mappings[0]->location."\n";  
   echo "Mappings Assembly Name: ".$mappings[0]->assembly_name."\n"; 
   echo "Mappings Strand: ".$mappings[0]->strand."\n";  
   echo "Mappings Coord/System: ".$mappings[0]->coord_system."\n";  
   echo "Mappings Allele String: ".$mappings[0]->allele_string."\n"; 
   for ($i=0; $i  < count($evidence);$i++) {
     echo "Evidence  : ".$evidence[$i]."\n";   
   } 
   for ($i=0; $i  < count($synonyms);$i++) {
     echo "Synonyms  : ".$synonyms[$i]."\n";   
   } 
   
   for ($i=0; $i  < count($populations);$i++) {
     echo "Population  Name        : ".$populations[$i]->population."\n";   
     echo "            Frequency   : ".$populations[$i]->frequency."\n";  
     echo "            Allele      : ".$populations[$i]->allele."\n"; 
     echo "            Allele Count: ".$populations[$i]->allele_count."\n";      
   } 
   
   
   
?> 
</textarea>
<br>
<input type="button" value="Select" onclick="document.form.textarea.select()">
<input class='estilo004' type="Submit" value="Save to file" > <input class='estilo004' type="Text" name="file"  size="15" value="variation">
</form> 
  </BODY>
</HTML>
