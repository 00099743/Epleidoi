
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

$image_ohlinks = array(
          'src' => 'images/login_kop.jpg',
          'height' => '45',
          'width' => '100',
          'alt' => '',
          'margin-top' => '2cm'
         
        );

$image_ohlinks_knop = array(
          'src' => 'images/login_knop.jpg',
          'height' => '27',
          'width' => '103',
           'alt' => '',
         
        );


$image_advertentie = array(
          'src' => 'images/advertentie.jpg',
          'height' => '546',
          'width' => '170',
           'alt' => '',
         
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
      </li><a href="<?php echo site_url("Hoe_het_werkt"); ?>">Hoe het werkt</a></li>
      </li><a href="<?php echo site_url("Zaak_plaatsen"); ?>">Zaak plaatsen</a></li>
      </li><a href="<?php echo site_url("Mijn_zaken"); ?>">Mijn zaken</a></li>
      </li><a href="<?php echo site_url("Register_Advocaat"); ?>">Inschrijving advocaat</a></li>
    </ul></div>
    </div>
  </div>
  <div id="strook">
  </div>
