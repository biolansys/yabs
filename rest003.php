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
     <tr ><td class=tr0>Get Gentree by ID</td></tr>
    <tr valign=top  >
       <td  >  <center>
         <form  method='POST' action="rest0030.php " target=ff001>
         <input value='text/x-fasta;type=cds' type="hidden" size=40 name="content-type">
         <table border=0 CELLSPACING=1 CELLPADDING=2 class=tabla0>
           <tr align=center>
             <td align=right>  ID:             </td>
             <td> <input type="Text" name="id"  size="30" value="ENSGT00390000003602">  </td>
             
             <td align=right> NH Format:             </td>
             <td align=left> <select class='estilo004' name="nh_format" >
                      <option selected value="simple"> simple </option>
                      <option          value="full"> full </option>
                      <option          value="species"> species </option>
                      <option          value="phylip"> phylip </option>
                      <option          value="njtree"> njtree </option>
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
