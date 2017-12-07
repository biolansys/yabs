<HTML>
  <HEAD>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>blast  </title>
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
      A:link    {font-size:12;font-family:calibri;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:visited {font-size:12;font-family:calibri;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:active  {font-size:12;font-family:calibria;text-decoration:none;color:white;border-style: groove ;border-width: 0px 0px 0px 0px}
      A:hover   {font-size:12;font-family:calibri;text-decoration:none;color: rgb(51,102,153);border-style: groove ;border-width: 0px 0px 0px 0px}
       .td0     {background:rgb(0,102,153)}  
       .td2     {background:rgb(112,128,144)}  
       .td1     {background:rgb(255,255,255);width:1px;font-family : verdana, arial, helvetica, sans-serif;font-size : 1pt; }  
       .cuerpo  {background: white url(imagenes/gradienteazul30.jpg) left center repeat-x;}   
       .Boxmain { BORDER: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;} 
       .Boxmain0 {border: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;
                  border-style:none solid none none ; } 
       .Boxmain1 {border: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;
                  border-style:none none solid none ; }   
       .tabla2      {border-bottom: 0px solid #C0C0C0;background-color: white}        
       .tr_titulo   {margin-left:0px;background-color:steelblue;font-family:verdana;font-size:9pt;color:white;
               font-weight:bold;text-align:center;vertical-align=top;} 
       .td_titulo    {margin-left:0px;font-family:verdana;font-size:9pt;
               font-weight:bold;text-align:right;vertical-align=top;}      
       .td_00        {border-bottom: 1px solid #C0C0C0;}    
       .td_01         {border-bottom: 2px solid #C0C0C0;} 
       </STYLE>  
    </HEAD>
<body class=cuerpo1 topmargin="08" leftmargin="0" righmargin=0>
<center>
<?php
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value; 
 
 	$url = 'http://www.ebi.ac.uk/Tools/services/rest/ncbiblast/status/'.$jobId;
	$result = file_get_contents($url, false, $context);

?>
<form method="POST" action="blast00100.php" target=_blank> 
  <TABLE BORDER=0 CELLSPACING=1 CELLPADDING=2 class='tabla0'>
  
   <tr >
      <td class=td_titulo>status:  </td>
      <td class=td_titulo0> <input type="text" name="jobId" size="20" value='<?php echo $result?>'>  </td>
   </tr>
   
   <tr  >
      <td class=td_titulo>jobId:  </td>
      <td class=td_titulo0> <input type="text" name="jobId" size="100" value='<?php echo $jobId?>'>  </td>
   </tr>
  
  <tr  >
      <td class=td_titulo>resultType:  </td>
      <td class=td_titulo0>  
             <select name="resultType" >
                              <option selected value="complete-visual-svg"> complete-visual-svg </option>
                              <option   value="ffdp-query-svg"> ffdp-query-svg </option>
                              <option   value="ffdp-subject-svg"> ffdp-subject-svg </option>
                              <option   value="ids"> ids </option>
                            </select>
       </td>
   </tr> 
   
   <tr class='tr_titulo0'>
      <td colspan=4 align='center'> <input class='tr_titulo0' type="submit" value="results" name="busca0">  </td>
   </tr>
   
 </table>
</form>    
 

</body> 
</html>
