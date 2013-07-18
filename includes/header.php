<?php $name =  basename($_SERVER['PHP_SELF']); ?>
<div id='header' class='homeheader'>
  <div id='logo' onclick="window.location='index.php'">
    <img src='images/logofinal.png' alt="logo" />
  </div>

  <div id='nav'>
    <ul>
      <li>
        <a class="<?php if ($name=='home.php' || $name=='index.php') { echo 'focus'; } else { echo 'text';}?>" href="home.php">Home</a>
      </li>
      <li>
        <a class="<?php if ($name=='portfolio.php') { echo 'focus'; } else { echo 'text';}?>" href="portfolio.php">Portfolio</a>
      </li>
      <li>
        <a class="<?php if ($name=='resume.php') { echo 'focus'; } else { echo 'text';}?>" href="resume.php">Resume</a>
      </li>
      <li>
        <a class="<?php if ($name=='contact.php') { echo 'focus'; } else { echo 'text';}?>" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</div>