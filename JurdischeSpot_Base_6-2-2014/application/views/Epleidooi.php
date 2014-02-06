
<?php
include 'templates/header.php';
?>
  
<div id="tekstwrapper">
  <div id="tekstwrapperlinks">
      <div id="onderheaderlinks" left="10px">
       <?php echo img($image_ohlinks);?>
          <table width="250" border="0" cellpadding="0" cellspacing="2">
              <tr>
                  <td><span class="blacktekst">Emailadres:</span></td>
                  <td><input type="text" name="txt_emailadres" size="20" /></td>
              </tr>
              <tr>
                  <td><span class="blacktekst">Wachtwoord:</span></td>
                  <td><input type="text" name="txt_wachtwoord" size="20" /></td>
         </tr>
              <tr>
              <td>
              <a href="<?php echo site_url("Wachtwoordvergeten_Advocaat"); ?>"><span class="blacktekst">Wachtwoord vergeten?</span></a>
               <td><a href="<?php echo site_url("Register_Advocaat"); ?>"> <span class="blacktekst">Nog niet ingeschreven?</span></a></td>  
              </td>
              </tr>
              <tr>
                  <td></td>
                 <td><a href="<?php echo site_url("Register_Advocaat"); ?>"><?php echo img($image_ohlinks_knop);?></a> </td>
              </tr>
        </table>
          
      </div>
    
    <div id="linksonder">
  <br />
      
  <a href="<?php echo site_url("Advocatengids"); ?>">Advocatengids</a><br />
      
  <a href="<?php echo site_url("Rechtbankengids"); ?>">Rechtbankengids</a><br />
  
  <a href="<?php echo site_url("Begrippenlijst"); ?>">Begrippenlijst</a><br />
 
  <a href="<?php echo site_url("Personeel"); ?>">Personeel gevraagd</a><br />
  
  <a href="<?php echo site_url("Adverteren"); ?>">Adverteren op Epleidooi.nl</a><br />
      
  <a href="<?php echo site_url("FAQ"); ?>">Veel gestelde vragen</a><br />
      
  <a href="<?php echo site_url("Contact"); ?>">Contact</a></div>
    </div>
  
<div id="onderheaderrechts">
  <div id="blokbuffer"></div>
  <div id="bloklinks"><a href="<?php echo site_url("Zaak_plaatsen"); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Afbeelding16','','<?php echo base_url("images/bloklinks_over.jpg"); ?>',1)"><?php echo img($image_oheaderlinks);?></a></div>
  <div id="blokbuffer"></div>
  <div id="blokrechts"><a href="<?php echo site_url("Register_Advocaat"); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Afbeelding17','','<?php echo base_url("images/blokrechts_over.jpg"); ?>',1)"><?php echo img($image_oheaderrechts);?></a></div>
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
    <div id="advertentieblokje"><?php echo img($image_advertentie);?></div>
    </div>
</div>
</div>
    <?php
include 'templates/footer.php';
?>