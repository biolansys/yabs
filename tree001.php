<html>
<head>
<script type="text/javascript" src="../jsphylosvg/raphael-min.js"></script> 
	<script type="text/javascript" src="../jsphylosvg/jsphylosvg-min.js"></script> 				

<?
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value;
if (!isset($y0)) $y0=800;
if (!isset($x0)) $x0=600;
$arbol=trim($arbol," " );
$arbol=trim($arbol,"\n" );
$arbol=trim($arbol,"\r" );
$arbol0="";
$paragraphs = explode("\n", $arbol);
for($a =0 ;$a <count($paragraphs); $a++)
$arbol0.=trim($paragraphs[$a]);
$arbol0=trim($arbol0);
//echo $arbol0;
if ($format=='circular') {
?>
 <script type="text/javascript">
	window.onload = function(){
			var dataObject = { newick: '<?php echo $arbol0?>' };
			phylocanvas = new Smits.PhyloCanvas(
				dataObject,
				'svgCanvas', 
				'<?php echo $y0?>', '<?php echo $x0?>',
				'circular'
			);
	};
	</script>
<?
} else {
?>
	<script type="text/javascript">
  window.onload = function(){
			var dataObject = { newick: '<?php echo $arbol0?>' };
			phylocanvas = new Smits.PhyloCanvas(
				dataObject,
				'svgCanvas', 
				'<?php echo $y0?>', '<?php echo $x0?>'
			);
	};
	</script>

<?
}
?>	
</head>
<body>
<center>
  <table border=1 CELLSPACING=0 CELLPADDING=10 width=80%>
   <tr><td>
	  <div id="svgCanvas" style="overflow-y: scroll;"> </div>
	 </td>
   <td valign=top>
      <form  name=form method='POST'action="tree001.php "  >
      <table border=0 CELLSPACING=0 CELLPADDING=10 class=tabla0>  
        <tr> 
          <td colspan=1>    
              <textarea name="arbol"  id="arbol" rows="25" cols="32" wrap="on" ><?echo $arbol?></textarea>
              <center> <br>
          </td> 
       </tr>
       <tr>      
          <td align=center> Dimensions :            
               <input type="Text" name="y0"  size="3" value="<?echo $y0?>">   
               x
              <input type="Text" name="x0"  size="3" value="<?echo $x0?>"> 
          </td>
        </tr>
        <tr>    
             <td align=center>  Format: 
              <select class='estilo004' name="format" >
                      <option selected value="normal"> Tree </option>
                      <option          value="circular">Circular </option>
                   </select>      
             </td>
        </tr>
        <tr class=tr_titulo0>
             <td align='center' colspan=6>
             <input class='estilo004' type="Submit" value="Draw tree" >
             </td>
          </tr>
         </table>  
         </form>
   </td>
   </tr>
<!--	 
	 <tr><td>
 
	   <textarea id="txtMessage" rows="10" cols="50"><?php echo trim($arbol0);?></textarea>
	 </td></tr>
-->	 
  </table>  
</body>
</html>