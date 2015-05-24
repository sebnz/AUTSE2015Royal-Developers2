<!DOCTYPE HTML>
<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Add Evidence Item">
        <title>Add Evidence Item</title>
        
    </head>
    
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>


    <body>
        
        
        
        <div id='cssmenu'>
            <ul>
            <li><a href='index.php'>Home</a></li>
            <li class='active'><a href='addevidenceitemform.php'>Add</a></li>
            <li><a href='searchevidenceitemform.php'>Search</a></li>
            <li><a href='#'>empt</a></li>
            </ul>
        </div>
        
        <h1 style = "text-align: center">Add Evidence Item</h1>
		<!--The complete form using the post method, class 'poststatusform is used for CSS' -->
        <form action= "addevidenceitemprocess.php" method="post" class="poststatusform">
            
            <input type="text" name="title" placeholder="Title" required>
            
            <input type="text" name="author" placeholder="Author/s" required>

            <input type="text" name="journal" placeholder="Journal" required>
            
            <input type="date" name="year" placeholder="Year" required>
            
        <label for="titles">Credibility Rating of Article: </label>
            <select name="credibility" id="credibility"> 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
            
            <input type="text" name="ratedby" placeholder="Rated by?" required>
            
            <label for="titles">Research Level: </label>
            <select name="rlevel">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
            </select>
            <hr>
        <label for="titles">Software Develoment Methodology Used: </label>
            <select name="method" >
            <option value="Agile">Agile</option>
            <option value="Waterfall">Waterfall</option>
            </select >
            <hr>
        <label for="titles">Practise Being Investigated: </label>
            <select name="practise">
                <option value="SCRUM">SCRUM</option>
            <option value="Spiral">Spiral</option>
            <option value="XP">XP</option>
            </select>
            <hr>
            
            <input type="text" name="who" placeholder="Who" required>
            <input type="text" name="what" placeholder="What" required>
            <input type="text" name="where" placeholder="Where" required>
            <input type="text" name="when" placeholder="When" required>
            <input type="text" name="how" placeholder="How" required>
            <input type="text" name="why" placeholder="Why" required>
        <label for="titles">Confidence Rating</label>
            <select name="confidence">
            <option value="1" name>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
            <hr>

        <input type="submit" value="Post"><input type="reset" value="Reset">
    
        </form>


  </body>
    
</html>