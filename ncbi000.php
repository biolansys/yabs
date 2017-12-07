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
   <table  CELLSPACING=0 CELLPADDING=4 border=0  bgcolor=#FFFFFF  width=99%>
     <tr ><td class=tr0>efetch nucleotid/nuccore/nucest/nucgss/homologene/sequences by ID</td></tr>
    <tr valign=top  >
       <td  >  <center>
         <form  method='POST' action="ncbi0000.php " target=ff001>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=0 CELLPADDING=4 class=tabla0>
           <tr align=center>  
             <td align=right>  Database:             </td>
             <td align=left> <select class='estilo004' name="db" >
                      <option selected value="nuccore"> nucleotid</option>
                      <option          value="protein"> protein </option>
                      <option          value="nucest"> nucest </option>
                      <option          value="nucgss"> nucgss </option>
                      <option          value="homologene"> homologene </option>
                      <option          value="sequences"> sequences </option>
                       
                   </select>      
             </td>
           </tr>
           <tr align=center>
             <td align=right>  ID:             </td>
             <td align=left> <input type="Text" name="id"  size="15" value="21614549">  </td>
           </tr>
           <tr align=center>  
             <td align=right>  Strand:             </td>
             <td align=left> <select class='estilo004' name="strand" >
                      <option selected value="1"> 1 </option>
                      <option          value="2"> 2 </option>
                   </select>      
             </td>
           </tr>
           <tr align=center>    
             <td align=right>  Range:             </td>
             <td align=left> <input type="Text" name="start"  size="10" value="0">   
              <input type="Text" name="stop"  size="10" value="1000">  </td>
           </tr>
           <tr align=center>    
             <td align=right> Format:             </td>
             <td align=left> <select class='estilo004' name="rettype" >
                      <option selected value="fasta"> fasta </option>
                      <option          value="gb"> genbank </option>
                      
                   </select>      
             </td>
           </tr>
           <tr align=center>    
             <td align=right> Complexity:             </td>
             <td align=left> <select class='estilo004' name="complexity" >
                      <option   value="9"> entire blob </option>
                      <option  selected        value="1"> bioseq </option>
                      <option          value="2"> minimal bioseq-set </option>
                      <option          value="3"> minimal nuc-prot </option>
                      <option          value="4"> minimal pub-set </option>
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
