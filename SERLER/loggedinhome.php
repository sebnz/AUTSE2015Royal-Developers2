<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Home">
    <title>Home Page</title>
  </head>
    
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    
  <body>

      
      <div id='cssmenu'>
            <ul>
            <li  class='active'><a href='#'>Home</a></li>
                <li><a href='addevidenceitemform.php'>Add</a></li>
                <li><a href='searchevidenceitemform.php'>Search</a></li>
                <li><a href='create.php'>Create login</a></li>
                
                
            <li style="float:right;"><a href='login.php'>Log In</a></li>
            </ul>
        </div>
      <div class="homeheader">
      <h2>SERLER</h2>
          </div>
      
<?php
if(isset($_SESSION["user_id"])) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
      
      
     



  </body>
    
</html>