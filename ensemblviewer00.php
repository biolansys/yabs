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
  <BODY   topmargin="5" leftmargin="0" rightmargin=0>
  <center>
   <table  CELLSPACING=0 CELLPADDING=4 border=0  bgcolor=#FFFFFF   width=99%>
     <tr ><td class=tr0>EnsEmbl Viewer by Region</td></tr>
    <tr valign=top  >
       <td  >  <center>
         <form  method='POST' action="ensemblviewer01.php " target=_blank>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr align=center>
             <td align=right>  Region:             </td>
             <td> <input type="Text" name="region"  size="25" value="X:1000000..1001000:1">  </td>
           </tr>
            <tr align=center>
             <td align=right>  Gene:             </td>
             <td> <input type="Text" name="gene"  size="25" value="ENSG00000012048">  </td>
           </tr>
           
            <tr align=center>
             <td align=right>  Species:             </td>
             <td align=left> <input type="Text" name="species"  size="20" value="human">  </td>
             
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
