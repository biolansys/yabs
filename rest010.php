<HTML>
  <HEAD>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>biolansys ensembl REST  </title>
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
  <BODY   topmargin="5" leftmargin="0" rightmargin=0>
  <center>
   <table  CELLSPACING=0 CELLPADDING=4 border=0  bgcolor=#FFFFFF  width=99%  height=100%>
     <tr  height=1%><td class=tr0>Homology by Id</td></tr>
    <tr valign=top   height=1%>
       <td  >  <center>
         <form  method='POST' action="rest0100.php " target=ff001>
         
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr>
            <td align=right>  Gene ID:             </td>
             <td> <input type="Text" name="id"  size="30" value="ENSG00000157764">  </td> 
            <td align=right>  Sequence:             </td>
             <td align=left> <select class='estilo004' name="sequence" >
                      <option selected value="cdna"> cdna </option>
                      <option          value="protein"> protein </option>
                      <option          value="none"> none</option>
                   </select>      
             </td> 
             <td align=right>  Type:             </td>
             <td align=left> <select class='estilo004' name="type" >
                      <option selected value="orthologues"> Orthologues </option>
                      <option          value="paralogues"> Parologues </option>
                      <option          value="projections"> Projections </option>
                      <option          value="all"> All</option>
                   </select>      
             </td>
           <tr>  
            
             <td align=right>  Species:             </td>
             <td> <input type="Text" name="species"  size="30" value=" ">  </td> 
             
              <td align=right> Target Species:             </td>
             <td> <input type="Text" name="tspecies"  size="30" value=" ">  </td> 
              <td align=right>  Target Taxon:             </td>
             <td> <input type="Text" name="taxon"  size="30" value=" ">  </td> 
             
             
           <tr class=tr_titulo0>
             <td align='center' colspan=6>
             <input class='estilo004' type="Submit" value="Send" >
             </td>
          </tr>  
         </table>  
         </form>
       </td>
       </tr>
      <tr> 
       <td   >
         <iframe name=ff001 src='' width=100%  height=100% scrolling="auto" frameborder=0> </iframe> 
       </td>
      </tr>
    </table>
  </BODY>
</HTML>
