<HTML>
  <HEAD>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>biolansys ensembl REST    </title>
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
  <BODY  topmargin="5" leftmargin="0" rightmargin=0>
  <center>
   <table  CELLSPACING=0 CELLPADDING=4 border=0    bgcolor=#FFFFFF   width=99%  height=100%>
   <tr  height=1%><td class=tr0>Get Sequence by ID</td></tr>
    <tr  height=1% valign=top width=120>
       <td  >  <center>
         <form  method='POST'action="rest000.php " target=ff001>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=0 CELLPADDING=2 class=tabla0>  
           <tr align=center>
             <td align=right>  ID:             </td>
             <td> <input type="Text" name="id"  size="25" value="ENSG00000157764">  </td>
             <td align=right>  Type:             </td>
             <td align=left> <select class='estilo004' name="type" >
                      <option selected value="genomic"> genomic </option>
                      <option          value="cds"> cds </option>
                      <option          value="cdna"> cdna </option>
                      <option          value="protein"> protein </option>
                   </select>      
             </td>
             
             <td align=right>  Multiple Seqs:             </td>
             <td align=left> <select class='estilo004' name="multiple_sequences" >
                      <option selected value="1"> Yes </option>
                      <option          value="0"> No </option>
                   </select>      
             </td>
           </tr>  
           <tr>  
             <td align=right>  Species:             </td>
             <td align=left> <input type="Text" name="species"  size="25" value="">  </td>
              <td align=right>  DB Type:             </td>
             <td align=left> <input type="Text" name="db_type"  size="20" value="">  </td>
              <td align=right>  Object Type:             </td>
             <td align=left> <input type="Text" name="object_type"  size="20" value="">  </td>
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
         <iframe name=ff001 src='' width=100%  height=100% scrolling="auto" frameborder=0> </iframe> 
       </td>
      </tr>
    
   
    </table>
  </BODY>
</HTML>
