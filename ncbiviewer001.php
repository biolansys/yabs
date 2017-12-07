<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
   <link rel="stylesheet" type="text/css" href="http://www.ncbi.nlm.nih.gov/projects/sviewer/css/sv-cleanup.css">
   <link rel="stylesheet" type="text/css" href="http://www.ncbi.nlm.nih.gov/core/extjs/ext-3.4.0/resources/css/ext-all.css">
   <link rel="stylesheet" type="text/css" href="http://www.ncbi.nlm.nih.gov/core/extjs/ext-3.4.0/resources/css/xtheme-gray.css" id="theme">
   <script type="text/javascript" src="http://www.ncbi.nlm.nih.gov/core/extjs/ext-3.4.0/adapter/ext/ext-base.js"></script>
   <script type="text/javascript" src="http://www.ncbi.nlm.nih.gov/core/extjs/ext-3.4.0/ext-all.js"></script>
   <script type="text/javascript" src="http://www.ncbi.nlm.nih.gov/core/extjs/ext-3.4.0/plugins/basex/ext-basex.js"></script>
   <link rel="stylesheet" type="text/css" href="http://www.ncbi.nlm.nih.gov/projects/sviewer/css/style.css" media="screen, projection, print">
   <script type="text/javascript" src="http://www.ncbi.nlm.nih.gov/projects/sviewer/js/main.js"></script>
  </head>
  <body>
  <?php
foreach($_POST as $var => $value) $$var = $value;
foreach($_GET  as $var => $value) $$var = $value; 
?>
    <div id='some-id' class='SeqViewerApp'>
  <a href='?embedded=true&id=<?echo $id?>'></a>
</div>
  </body>
</html>
