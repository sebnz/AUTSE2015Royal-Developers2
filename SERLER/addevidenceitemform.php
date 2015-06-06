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
            <li><a href='loggedinhome.php'>Home</a></li>
            <li class='active'><a href='addevidenceitemform.php'>Add</a></li>
            <li><a href='searchevidenceitemform.php'>Search</a></li>
                <li style="float:right;" ><a href='logout.php'>Log Out</a></li>
            </ul>
        </div>
        
        <h1 style = "text-align: center">Add Evidence Item</h1>
		<!--The complete form using the post method, class 'poststatusform is used for CSS' -->
        <form action= "addevidenceitemprocess.php" method="post" class="poststatusform">
            
            <input type="text" name="title" placeholder="Title" required>
            
            <input type="text" name="author" placeholder="Author/s" required>

            <input type="text" name="journal" placeholder="Journal" required>
            
            <input type="date" name="year" placeholder="Year" required>
            <br>
            <label for="titles">Credibility Rating of Article: </label>
            <select name="credibility" id="credibility"> 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
            <br>
            <input type="text" name="journal" placeholder="Reason?" required>
            <br>
            <input type="text" name="ratedby" placeholder="Who Rated It?" required>
            <br>
            <label for="titles">Research Level: </label>
            <select name="credibility" id="credibility"> 
            <option value="1">Beginner</option>
            <option value="2">Intermediate</option>
            <option value="3">Advanced</option>
            </select>
            <hr>
            
            <label for="titles">Software Development Methodology Used: </label>
            <select name="method" id="credibility"> 
            <option value="1">Waterfall</option>
            <option value="2">Agile</option>
            </select>
            
            <input type="date" name="year" placeholder="Name" required>
            <input type="date" name="year" placeholder="Description" required>
            <hr>
            
            <input type="date" name="year" placeholder="What Benefit or outcome is being tested?" required>
            <br>
            
            <input type="text" name="who" placeholder="Who" required>
            <input type="text" name="what" placeholder="What" required>
            <input type="text" name="where" placeholder="Where" required>
            <input type="text" name="when" placeholder="When" required>
            <input type="text" name="how" placeholder="How" required>
            <input type="text" name="why" placeholder="Why" required>
            <input type="text" name="why" placeholder="What is the result of the study" required>
             <br>
            
            <input type="text" name="practise" placeholder=" What is the integrity of the implementation of the practice/method?" required>
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
            
            <input type="text" name="why" placeholder="Reason?" required>
            <br>
            <input type="text" name="why" placeholder="Who rated it?" required>
            
            <hr>
            
            <label for="titles" style="text-align:center">Information on Research Design</label>
            <br>
            
            
            <hr>
            <input type="text" name="why" placeholder="Research Question" required>
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
            <input type="text" name="why" placeholder="Research Metrics Used" required>
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
            
        

        <input type="submit" value="Post"><input type="reset" value="Reset">
    
        </form>


  </body>
    
</html>