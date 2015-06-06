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
            <li><a href='loggedinhome.php'>Home</a></li>
            <li><a href='addevidenceitemform.php'>Add</a></li>
            <li class='active'><a href='searchevidenceitemform.php'>Search</a></li>
                 <li style="float:right;" ><a href='logout.php'>Log Out</a></li>
            </ul>
        </div>
      
        <h1 style = "text-align: center">Search System</h1>
      
        <form action= "searchevidenceitemprocess.php" method="GET" class="poststatusform"> 
             <!--Style is same as postwhoform, therefore class is kept the same as postwhoform to link the CSS-->
            
            <input type="text" name="title" placeholder="Enter Title" >
            <input type="text" name="author" placeholder="Enter Author/s" >
            <input type="text" name="author" placeholder="Journal" >
            <input type="text" name="year" placeholder="Enter Year" >
            <br>
            
            <br>
            <label for="titles">Software Development Methodology Used: </label>
            <select name="credibility" id="credibility"> 
            <option value="1">Waterfall</option>
            <option value="2">Agile</option>
            </select>
            <br>
            
            
            <input type="text" name="why" placeholder="Research Question" >
            <br>
            
            <label for="titles">Research Method</label>
            <select name="confidence">
            <option value="1" name>Interviews</option>
            <option value="2">Questionaires</option>
            <option value="3">Surveys</option>
            <option value="4">Case Studies</option>
            <option value="5">Observation</option>
            <option value="5">Trials</option>
            </select>
            <br>
            <input type="text" name="why" placeholder="Research Metrics Used" >
            <br>
            
            <label for="titles">Nature of the participants</label>
            <select name="confidence">
            <option value="1" name>Good</option>
            <option value="2">Bad</option>
            <option value="3">Terrible</option>
            <option value="4">Obedient</option>
            <option value="5">Calm</option>
            <option value="5">Easy Going</option>
            </select>
            <hr>
            
            <input type="text" name="who" placeholder="Who" >
            <input type="text" name="what" placeholder="What" >
            <input type="text" name="where" placeholder="Where" >
            <input type="text" name="when" placeholder="When" >
            <input type="text" name="how" placeholder="How" >
            <input type="text" name="why" placeholder="Why" >
             <br>
            
             <br>
            
            <label for="titles">Confidence Rating</label>
            <select name="confidence">
            <option value="1" name>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
            
            <br>

            <input type="text" name="why" placeholder="Rated By" >
            
            <hr>
            
            
            
            <a class="button" href="savedsearch.php">save search</a>

            
    
                <br>
            
            
        <input type="submit" value="Search"><input type="reset" value="Reset">
    
        </form>


  </body>
    
</html>