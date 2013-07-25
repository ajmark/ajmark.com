<?php $name =  basename($_SERVER['PHP_SELF']); ?>
<div id='header' class="<?php if (strpos($name,'project') !== false) { echo 'alt';} else { echo 'homeheader';}?>">
  <div id='logo' onclick="window.location='index.php'">
    <img src='images/logofinal.png' alt="logo" />
  </div>

  <div id='nav'>
    <ul>
      <li>
        <a class="<?php if ($name=='index.php') { echo 'focus'; } else { echo 'text';}?>" href="index.php">Home</a>
      </li>
      <li>
        <a class="<?php if ($name=='resume.php') { echo 'focus'; } else { echo 'text';}?>" href="resume.php">Resum&eacute;</a>
      </li>
      <li>
        <a class="<?php if ($name=='contact.php') { echo 'focus'; } else { echo 'text';}?>" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</div>