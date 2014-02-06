<?php
include 'templates/header.php';
?>
  
  <div id="regblock"><span class="koptekst">Inschrijving Advocaat</span><br />
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
 <?php
include 'templates/footer.php';
?>