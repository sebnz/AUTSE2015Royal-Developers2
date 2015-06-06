<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="serlerdatabase"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="INSERT INTO $tbl_name (username, password) VALUES ('{$myusername}', '{$mypassword}')"; 
$result=mysql_query($sql);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);


?>

<!DOCTYPE HTML>
<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Search who">
        <title>Search who</title>
        
    </head>
    
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>


    <body>
        
        
        <div id='cssmenu'>
            <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='addevidenceitemform.php'>Add</a></li>
            <li><a href='searchevidenceitemform.php'>Search</a></li>
            <li><a href='#'>empt</a></li>
            <li style="float:right;" class="active"><a href='login.php'>Log In</a></li>
            </ul>
        </div>
      
        <h1 style = "text-align: center">Search who System</h1>
      
        <form action= "createprocess.php" method="POST" class="poststatusform"> 
             <!--Style is same as postwhoform, therefore class is kept the same as postwhoform to link the CSS-->
            <input name="myusername" type="text" id="myusername" placeholder="Username">
            <input name="mypassword" type="text" id="mypassword" placeholder="Password">
    
    
        <input type="submit" name="Submit" value="Submit">
    
        </form>



        
  </body>
    
</html>