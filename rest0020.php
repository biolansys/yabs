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
   $service_url = 'http://rest.ensembl.org/sequence/region/human/'.$region.'?content-type=application/json' ;
   $response = file_get_contents($service_url);
   $json = new Services_JSON();
   $sequence = $json->decode($response);
   $id=$sequence->id;
   $seq=$sequence->seq;
   $molecule=$sequence->molecule;
   echo ">".$id.'|'.$molecule."\n";
   $l_as=strlen($seq); 
          $l_as0=0;
          while ($l_as0 < $l_as) {      
                echo substr($seq,$l_as0,50)."\n";
                $l_as0=$l_as0 + 50;
          };  
   
?> 
</textarea>
<br>
<input type="button" value="Select" onclick="document.form.textarea.select()">
<input class='estilo004' type="Submit" value="Save to file" > <input class='estilo004' type="Text" name="file"  size="15" value="sequence.fasta">
</form> 
  </BODY>
</HTML>
