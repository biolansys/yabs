<HTML>
  <HEAD>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <title>blast  </title>
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
    <STYLE type="text/css">
      A:link    {font-size:12;font-family:calibri;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:visited {font-size:12;font-family:calibri;text-decoration:none;color:rgb(69,69,69);border-style: groove ;border-width: 0px 0px 0px 0px}
      A:active  {font-size:12;font-family:calibria;text-decoration:none;color:white;border-style: groove ;border-width: 0px 0px 0px 0px}
      A:hover   {font-size:12;font-family:calibri;text-decoration:none;color: rgb(51,102,153);border-style: groove ;border-width: 0px 0px 0px 0px}
       .td0     {background:rgb(0,102,153)}  
       .td2     {background:rgb(112,128,144)}  
       .td1     {background:rgb(255,255,255);width:1px;font-family : verdana, arial, helvetica, sans-serif;font-size : 1pt; }  
       .cuerpo  {background: white url(imagenes/gradienteazul30.jpg) left center repeat-x;}   
       .Boxmain { BORDER: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;} 
       .Boxmain0 {border: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;
                  border-style:none solid none none ; } 
       .Boxmain1 {border: 1px solid #9DB0CA;BACKGROUND-COLOR: #FFFFFF;
                  border-style:none none solid none ; }   
       .tabla2      {border-bottom: 0px solid #C0C0C0;background-color: white}        
       .tr_titulo   {margin-left:0px;background-color:steelblue;font-family:verdana;font-size:9pt;color:white;
               font-weight:bold;text-align:center;vertical-align=top;} 
       .td_titulo    {margin-left:0px;font-family:verdana;font-size:9pt;
               font-weight:bold;text-align:right;vertical-align=top;}      
       .td_00        {border-bottom: 1px solid #C0C0C0;}    
       .td_01         {border-bottom: 2px solid #C0C0C0;} 
       </STYLE>  
    </HEAD>
<body class=cuerpo1 topmargin="08" leftmargin="0" righmargin=0>
<center>
<form method="POST" action="blast0001.php" target=ff001> 
  <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2 class='tabla0'>
    <tr> <th  colspan=6 class='tr_titulo'>&nbsp;&nbsp;&nbsp; blast query&nbsp;&nbsp;</th> </tr>
   <tr >
      <td class=td_titulo>email:  </td>
      <td class=td_titulo0><input type="text" name="email" size="30" value='info@biolansys.com'>  </td>
      <td class=td_titulo>title: </td>
      <td class=td_titulo0 colspan=2><input type="text" name="title" size="30" value='blast_example'> </td>
      <td class=td_titulo colspan=1 alignt=right><input class='tr_titulo0' 
             onClick='window.open("http://www.ebi.ac.uk/Tools/webservices/services/sss/ncbi_blast_rest")' type="button" value="help" > </td>
   </tr>
    
   <tr>
        <td class=td_titulo ><b>sequence:</td>
        <td colspan=6 class=td_titulo1>
          <textarea name="sequence"  rows="10" cols="80" wrap="on" >MEKVPGEMEIERRERSEELSEAERKAVQAMWARLYANCEDVGVA</textarea> 
        </td> 
   </tr>
   
   <tr >
      <td class=td_titulo>stype:  </td>
      <td class=td_titulo0>  
             <select name="stype" >
                              <option selected value="protein"> protein </option>
                              <option   value="dna"> dna </option>
             </select>
       </td>
        <td class=td_titulo>program:  </td>
      <td class=td_titulo0>  
             <select name="program" >
                              <option selected value="blastp"> blastp</option>
                              <option   value="blastx"> blastx</option>
                              <option   value="blastn"> blastn</option>
                              <option   value="tblastx"> tblastx</option>
                              <option   value="tblastn"> tblastn</option>
                            </select>
       </td>
      <td class=td_titulo>database: </td>
      <td class=td_titulo0>
         <select name="database" >
                              <option selected value="uniprotkb">uniprot (protein)</option>
                              <option  value="uniprotkb_swissprot">uniprotkb_swissprot (protein)</option>
                              <option  value="uniprotkb_swissprotsv">uniprotkb_swissprotsv (protein)</option>
                              <option  value="uniprotkb_trembl">uniprotkb_trembl (protein)</option>
                              <option  value="uniprotkb_pdb">uniprotkb_pdb (protein)</option>
                              <option  value="em_rel">EMBL Release (nucleotide)</option>
                              <option  value="em_rel_env">EMBL Environmental (nucleotide)</option>
                              <option  value="em_rel_est_env">EMBL EST Environmental (nucleotide)</option>
                              <option  value="em_rel_gss_env">EMBL GSS Environmental (nucleotide)</option>
                              <option  value="em_rel_htc_env">EMBL HTC Environmental (nucleotide)</option>
                              <option  value="em_rel_htg_env">EMBL HTG Environmental (nucleotide)</option>
                              <option  value="em_rel_pat_env">EMBL Patent Environmental (nucleotide)</option>
                              <option  value="em_rel_std_env">EMBL Standard Environmental (nucleotide)</option>
                              <option  value="em_rel_est_hum">EMBL EST Human (nucleotide)</option>
                              <option  value="em_rel_std_hum">EMBL Standard Human (nucleotide)</option>
                              <option  value="em_rel_mam">EMBL Mammal (nucleotide)</option>
          </select>
       </td>
   </tr>
  
   <tr class='tr_titulo0'>
      <td colspan=6 align='center'> <input class='tr_titulo0' type="submit" value="blast" name="busca0">  </td>
   </tr>
   <tr><td colspan=6><hr></td></tr>
   <tr> 
       <td  colspan=6 >
         <iframe name=ff001 src='' width=100% height=200 scrolling="auto" frameborder=0> </iframe> 
       </td>
   </tr>
 </table>
</form>  



</body> 
</html>
