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
            <li class='active'><a href='searchevidenceitemform.php'>Search</a></li>
            <li><a href='#'>empt</a></li>
            </ul>
        </div>
      
        <h1 style = "text-align: center">Search System</h1>
      
        <form action= "searchevidenceitemprocess.php" method="GET" class="poststatusform"> 
             <!--Style is same as postwhoform, therefore class is kept the same as postwhoform to link the CSS-->
            
            <input type="text" name="title" placeholder="Enter Title" required>
            <input type="text" name="author" placeholder="Enter Author/s" required>
            <input type="text" name="year" placeholder="Enter Year" required>
    
    
        <input type="submit" value="Search"><input type="reset" value="Reset">
    
        </form>


  </body>
    
</html>