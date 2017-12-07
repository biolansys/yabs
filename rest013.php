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
  <BODY   topmargin="5" leftmargin="0" rightmargin=0>
  <center>
   <table  CELLSPACING=0 CELLPADDING=4 border=0  bgcolor=#FFFFFF   width=99%>
     <tr ><td class=tr0>Get Features by Region</td></tr>
    <tr valign=top  >
       <td  >  <center>
         <form  method='POST' action="rest0130.php " target=ff001>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr align=center>
           
             <td align=right>  Region:             </td>
             <td> <input type="Text" name="region"  size="25" value="X:20000000-20500000">  </td>
             <td align=right>  Species:             </td>
             <td align=left> <input type="Text" name="species"  size="20" value="human">  </td>
           
             <td align=right>  Feature:             </td>
             <td align=left> <select class='estilo004' name="feature" >
                      <option selected value="gene"> gene </option>
                      <option          value="transcript"> transcript </option>
                      <option          value="cds"> cds</option>
                      <option          value="exon"> exon </option>
                      <option          value="repeat"> repeat </option>
                      <option          value="simple"> simple</option>
                      <option          value="misc"> misc</option>
                      
                      <option          value="variation">  variation</option>
                      <option          value="somatic_variation"> somatic variation</option>
                      <option          value="structural_variation"> structural variation</option>
                      <option          value="somatic_structural_variation"> somatic structural variation</option>
                      <option          value="constrained"> constrained</option>
                      <option          value="regulatory">regulatory</option>
                   </select>      
             </td> 
           
            
            
           </tr>
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
         <iframe name=ff001 src='' width=100% height=520 scrolling="auto" frameborder=0> </iframe> 
       </td>
      </tr>
    </table>
  </BODY>
</HTML>
