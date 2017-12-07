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
   <table  CELLSPACING=0 CELLPADDING=4 border=0  bgcolor=#FFFFFF  width=99% height=100%>
     <tr height=1%><td class=tr0>Genomic Align by Block</td></tr>
    <tr valign=top  height=1%>
       <td  >  <center>
         <form  method='POST' action="rest0050.php " target=ff001>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr align=left>
             <td align=right>  Species Set Group:             </td>
             <td> <input type="Text" name="species_sg"  size="30" value="mammals">  </td>
 <!--
              <td align=right>  </td>
             <td> <INPUT TYPE=CHECKBOX NAME="ancestral" value="Yes">Show Ancestral Sequences<P>
-->
           <tr align=left>   
             <td align=right>  Species Set (Pairwise Align) :             </td>
             <td colspan=5> <input type="Text" name="species_s"  size="90" value=" ">  </td>
           <tr align=left>  
             <td align=right>  Species :             </td>
             <td colspan=1> <input type="Text" name="species"  size="30" value="homo_sapiens">  </td>
           
             <td align=right>  Region:             </td>
             <td> <input type="Text" name="region1"  size="30" value="X:5000000-5000500:1">  </td>
          <tr align=left>   
             <td align=right>  Method:             </td>
             <td align=left> <select class='estilo004' name="method" >
                      <option selected value="EPO"> EPO </option>
                      <option          value="EPO_LOW_COVERAGE">EPO_LOW_COVERAGE </option>
                      <option          value="PECAN"> PECAN </option>
                      <option          value="LASTZ_NET">LASTZ_NET </option>
                      <option          value="BLASTZ_NET"> BLASTZ_NET </option>
                      <option          value="TRANSLATED_BLAT_NET"> TRANSLATED_BLAT_NET </option>
                   </select>      
             </td>
           
           <td align=right>  Format:             </td>
             <td align=left> <select class='estilo004' name="format" >
                      <option selected value="table"> table </option>
                      <option          value="clustal"> clustal </option>
                      <option          value="file"> fasta file </option>
                      <option          value="iphylip"> phylip (interleave)</option>
                      <option          value="ipfile"> phylip file (interleave) </option>
                      <option          value="phylip"> phylip (sequential)</option>
                      <option          value="pfile"> phylip file (sequential) </option>
                   </select>      
              
               Filename:              
               <input type="Text" name="fna"  size="20" value="gab001.fasta"> 
               
                </td>
           <tr class=tr_titulo0>
             <td align='right' colspan=3>
                <input class='estilo004' type="Submit" value="Send" >
             </td>
             </form>
             <form  method='POST' action="rest008.php" target=_blank>
             <td align='right' >
               <input class='estilo004' type="Submit" value="Show Species Set By Method" >
             </td>
             </form>
          </tr>  
         </table>  
       </td>
       </tr>
      <tr> 
       <td   >
         <iframe name=ff001 src='' width=100% height=100% scrolling="auto" frameborder=0> </iframe> 
       </td>
      </tr>
    </table>
  </BODY>
</HTML>
