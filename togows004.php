<HTML>
  <HEAD>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>biolansys ensembl REST  </title>
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
    
  </HEAD>
  <BODY   topmargin="5" leftmargin="0" rightmargin=0>
  <center>
   <table  CELLSPACING=0 CELLPADDING=4 border=0  bgcolor=#FFFFFF  width=99%>
     <tr ><td class=tr0>TogoWS database search</td></tr>
    <tr valign=top  >
       <td  >  <center>
         <form  method='POST' action="togows007.php " target=ff001>
         
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr align=left>
             <td align=right> Data:             </td>
             <td colspan=3>
             <textarea name="data"   cols="80" rows="15" wrap=SOFT> 
             
             </textarea>
             </td>
           
          <tr align=left>   
             
           <td align=right>  Format:             </td>
             <td align=left> 
               <select class='estilo004' name="format" >
                 <option value="fasta.gff" selected >fasta.gff</option>
                 <option value="genbank.fasta" >genbank.fasta</option>
                 <option value=".gb" >gb</option>
                 <option value=".gff" >gff</option>
                 <option value=".json" >json</option>
                 <option value=".xml" >xml</option>
               </select>      
             </td>
       
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
