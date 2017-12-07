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
  <BODY  topmargin="5" leftmargin="0" rightmargin=0>
  <center>
   <table  CELLSPACING=0 CELLPADDING=4 border=0    bgcolor=#FFFFFF   width=99%>
   <tr ><td class=tr0>Draw Tree from Newick format (using  
    <A HREF="http://www.jsphylosvg.com/" target=_blank  >jsPhyloSVG</a> js library)
   </td></tr>
    <tr valign=top width=120>
       <td  >  <center>
         <form  name=form method='POST'action="tree001.php " target=_blank>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=0 CELLPADDING=10 class=tabla0>  
           <tr align=center>
             <td colspan=3>    
              <textarea name="arbol"  id="arbol" rows="10" cols="100" wrap="on" >
(((((((>1|homo_sapiens||X|91164885-91:0.0060550461,(>3|pan_troglodytes||X|91915814:0.0000000001,>0|homo_sapiens||Y|5000000-500:0.0060677740):0.0000000880):0.0020218693,>2|gorilla_gorilla||X|88978917:0.0020073207):0.0110786849,>4|pongo_abelii||X|90577173-90:0.0031591205):0.0073318567,>5|macaca_mulatta||X|90652738-:0.0505242215):0.1150337049,>6|oryctolagus_cuniculus||X|83:0.2002937163):0.0746345710,>9|equus_caballus||X|71862192-:0.0631107282):0.0150871709,>8|sus_scrofa||X|94369335-9436:0.0758233383,>7|bos_taurus||X|42656419-4265:0.1562616806);
              </textarea>
              <center> <br>
               <b>Paste phylogenetic tree in Newick format <br> <br>
              <input type="button" value="Select" onclick="document.form.arbol.select()">
              <input type="button" value="Clear" onclick="document.form.arbol.value=''">
             </td> 
           </tr> 
           
           <tr> 
            <td align=center> Dimensions :            
               <input type="Text" name="y0"  size="5" value="800">   
               X
              <input type="Text" name="x0"  size="5" value="600"> 
            </td>
            
             <td align=right>  Format:             </td>
             <td align=left> <select class='estilo004' name="format" >
                      <option selected value="normal"> Tree </option>
                      <option          value="circular">Circular </option>
                   </select>      
             </td>
           <tr class=tr_titulo0>
             <td align='center' colspan=6>
             <input class='estilo004' type="Submit" value="Draw tree" >
             </td>
          </tr>
         </table>  
         </form>
       </td>
       </tr>
      <tr> 
       <td>
         <iframe name=ff001 src='' width=100% height=90 scrolling="auto" frameborder=0> </iframe> 
       </td>
      </tr>
    </table>
  </BODY>
</HTML>
