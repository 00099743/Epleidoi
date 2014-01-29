
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
  
  <div id="blokitem"><span class="koptekst">Inschrijving Advocaat</span><br />
    <br />
<form id='register' action='register.php' method='post'
    accept-charset='UTF-8'>


<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Your Full Name*: </label>
<input type='text' name='name' id='name' maxlength="50" />
<br>
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />
 <br>
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
 <br>
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<br>
<input type='submit' name='Submit' value='Submit' />
 
</form>
      <a href="index.php">Go Back</a></span></div>
 
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