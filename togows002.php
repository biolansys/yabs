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
     <tr height=1% ><td class=tr0>TogoWS database search</td></tr>
    <tr valign=top   height=1%>
       <td  >  <center>
         <form  method='POST' action="togows003.php " target=ff001>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr align=left>
             <td align=right> Search:             </td>
             <td colspan=3> <input type="Text" name="id"  size="50" value="lung%20cancer">  </td>
           
          <tr align=left>   
             <td align=right>  DataBase:             </td>
             <td align=left> 
               <select class='estilo004' name="db" >
                  <option value="uniprot" selected="selected">ebi-UniProt</option>
                  <option value="uniparc"            >ebi-uniparc</option>
                  <option value="uniref100"            >ebi-uniref100</option>
                  <option value="uniref90"            >ebi-uniref90</option>
                  <option value="uniref50"            >ebi-uniref50</option>
                  <option value="embl"            >ebi-embl</option>
                  <option value="pubmed"            >ncbi-pubmed</option>
                  <option value="nucleotide"            >ncbi-nucleotide</option>
                  <option value="protein"            >ncbi-protein</option>
                  <option value="gene"            >ncbi-gene</option>
                  
                  <option value="nuccore"            >ncbi-nuccore</option>
                  <option value="nucest"            >ncbi-nucest</option>
                  <option value="nucgss"            >ncbi-nucgss</option>
                  <option value="homologene"            >ncbi-homologene</option>
                  <option value="snp"            >ncbi-snp</option>
                  <option value="mesh"            >ncbi-mesh</option>
                  
                  <option value="ddbj"            >ddbj-ddbj</option>
                  <option value="dad"            >ddbj-dad</option>
                  <option value="pdb"            >pdbj-pdb</option>
                  <option value="compound"            >kegg-compound</option>
                  <option value="enzyme"            >kegg-enzyme</option>
                  <option value="genes"            >kegg-genes</option>
                  <option value="glycan"            >kegg-glycan</option>
                  <option value="orthology"            >kegg-orthology</option>
                  <option value="reaction"            >kegg-reaction</option>
                  <option value="module"            >kegg-module</option>
                  <option value="pathway"            >kegg-pathway</option>
               </select>      
             </td>
   <!--        
           <td align=right>  Format:             </td>
             <td align=left> 
               <select class='estilo004' name="format" >
                 <option value="" selected="selected">default</option>
                 <option value=".fasta" >fasta</option>
                 <option value=".gb" >gb</option>
                 <option value=".gff" >gff</option>
                 <option value=".json" >json</option>
                 <option value=".xml" >xml</option>
               </select>      
             </td>
  -->           
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
