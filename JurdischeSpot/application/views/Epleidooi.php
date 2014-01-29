
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Epleidooi - De ontmoetingsplaats voor advocaten en clienten</title>

<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<!--<link href="application/controllers/stylesheet.css" rel="stylesheet" type="text/css" />-->

<?php
$this->load->helper('html');
$this->load->helper('url');
echo link_tag('css/Stylesheet.css');

$image_bullit = array(
          'src' => 'images/bullit.jpg',
          'alt' => '',
          'width' => '17',
          'height' => '13',
          'title' => 'Bullit',
        );

$image_oheaderrechts = array(
          'src' => 'images/blokrechts.jpg',
          'name' => 'Afbeelding17',
          'width' => '297',
          'height' => '182',
          'border' => '0',
          'id'     => 'Afbeelding17'
        );

$image_oheaderlinks = array(
          'src' => 'images/bloklinks.jpg',
          'name' => 'Afbeelding16',
          'width' => '297',
          'height' => '182',
          'border' => '0',
          'id'     => 'Afbeelding16'
          
        );

$image_oheaderlinks_over = array(
          'src' => 'images/bloklinks_over.jpg',
         
          
        );

$image_oheaderrechts_over = array(
          'src' => 'images/blokrechts_over.jpg',
      
        );

//echo base_url("images/bloklinks_over.jpg");
//echo base_url("images/blokrechts_over.jpg");


?>
</head>

<body onload="MM_preloadImages('<?php echo base_url("images/bloklinks_over.jpg"); ?>','<?php echo base_url("images/blokrechts_over.jpg");?>)'">
<div id="mainwrapper">
  <div id="header">
    <div id="headerlinks"></div>
    <div id="headerrechts">
    <div id="headerrechtsbuffer"></div>
    <div class="abovelist" id="menuwrapper">
    </ul>
      </li><a href="<?php echo site_url("Test"); ?>">Home</a></li>
      </li><a href="#">Hoe het werkt</a></li>
      </li><a href="#">Zaak plaatsen</a></li>
      </li><a href="#">Mijn zaken</a></li>
      </li><a href="<?php echo site_url("Register_Advocaat"); ?>">Inschrijving advocaat</a></li>
    </ul></div>
    </div>
  </div>
  <div id="strook">
  </div>
  
<div id="tekstwrapper">
  <div id="tekstwrapperlinks">
    <div id="onderheaderlinks"></div>
    <div id="linksboven"><br />
      <span class="koptekst">Zaken per discipline</span><br /><br />
      
     <table width="240" border="0" cellpadding="0" cellspacing="2">
  <tr>
    <td width="20"><?php echo img($image_bullit);?></td>
    <td width="220" height="10"><a href="zaken.php">Arbeidsrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Bestuursrecht </a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Bouwrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Burenrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td valign="top"><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Aansprakelijkheids- <br />
en&nbsp;verzekeringsrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Contractenrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Huurrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Incassorecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Jeugdrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="index.php">Ondernemingsrecht </a><span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Onroerend goed recht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Personen- en familierecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="index.php">Sociaal zekerheidsrecht </a><span class="blauwetekst">(0)</span></td>
  </tr>
  <tr>
    <td><?php echo img($image_bullit);?></td>
    <td><a href="zaken.php">Strafrecht</a> <span class="blauwetekst">(0)</span></td>
  </tr>
</table>
  
 
  </div>
    <div id="linksonder">
  <br />
      
  <a href="index.php">Advocatengids</a><br />
      
  <a href="index.php">Rechtbankengids</a><br />
  
  <a href="index.php">Begrippenlijst</a><br />
 
  <a href="index.php">Personeel gevraagd</a><br />
  
  <a href="index.php">Adverteren op Epleidooi.nl</a><br />
      
  <a href="index.php">Veel gestelde vragen</a><br />
      
  <a href="index.php">Contact</a></div>
    </div>
  
<div id="onderheaderrechts">
  <div id="blokbuffer"></div>
  <div id="bloklinks"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Afbeelding16','','<?php echo base_url("images/bloklinks_over.jpg"); ?>',1)"><?php echo img($image_oheaderlinks);?></a></div>
  <div id="blokbuffer"></div>
  <div id="blokrechts"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Afbeelding17','','<?php echo base_url("images/blokrechts_over.jpg"); ?>',1)"><?php echo img($image_oheaderrechts);?></a></div>
</div>
<div id="tekstwrapperrechts">
  <div id="teksthead">
    <div id="kop">Laatste nieuwe zaken</div>
    
    </div>
  <div id="blokitem"><span class="koptekst">Arbeidsongeval</span><br />
    <br />
    <span class="normaletekst">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br />
      <br />
      <a href="index.php">Lees verder </a></span></div>
  <div id="blokitem2"><span class="koptekst">Arbeidsongeval</span><br />
    <br />
    <span class="normaletekst">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br />
      <a href="index.php"><br />
        Lees verder
        </a></span></div>
  <div id="blokitem"><span class="koptekst">Arbeidsongeval</span><br />
    <br />
    <span class="normaletekst">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br />
      <br />
      <a href="index.php">Lees verder </a></span></div>
</div>
  <div id="advertentiebalk">
    <div id="advertentieblokje"><img src="images/advertentie.jpg" width="170" height="546" /></div>
    </div>
</div>
</div>
<div id="footer">
  <div id="footermidden">
    <div id="footerlinks">Copyright © 2010 Epleidooi. All rights reserved. <br />
    Created by <a href="http://www.creative-design.nl/" target="_blank">Creative Design</a>.</div>
    <div id="footerrechts"><a href="index.php">Home</a><br />
      Hoe het werkt<br />
      Opdracht plaasten<br />
      Inschriijving advocaat<br />
      Adverteren op ipleidooi.nl<br />
      Veel gestelde vragen<br />
    Contact</div>
    <div id="footerrechts">Disclaimer<br />
      Privacyverklaring<br />
    Algemene voorwaarden</div>
  </div>
</div>
</body>
        
</html>