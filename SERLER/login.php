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
      
        <form action= "loginprocess.php" method="POST" class="poststatusform"> 
             <!--Style is same as postwhoform, therefore class is kept the same as postwhoform to link the CSS-->
            <input name="myusername" type="text" id="myusername" placeholder="Username">
            <input name="mypassword" type="text" id="mypassword" placeholder="Password">
    
    
        <input type="submit" name="Submit" value="Login">
    
        </form>


  </body>
    
</html>