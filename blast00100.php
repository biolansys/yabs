<HTML>
  <HEAD><TITLE>blast rest</TITLE></HEAD>
<body class=cuerpo1 topmargin="08" leftmargin="0" righmargin=0>
<center>
<?php
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value; 
 
 	$url = 'http://www.ebi.ac.uk/Tools/services/rest/ncbiblast/result/'.$jobId.'/'.$resultType;
 	//echo $url;
	$result = file_get_contents($url, false, $context);
   
 
?>
  <TABLE BORDER=0 CELLSPACING=1 CELLPADDING=2 class='tabla'>
  
   <tr bgcolor='99ccff'>
      <td class=td_titulo>
      <?if ($resultType=='ids') {
      ?>
      <textarea columns=60 rows=30><?echo $result?></textarea></td>
      <?} else echo $result?>
   </tr>
  
   
 </table>
 

</body> 
</html>
