<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<title>MySQL Databases with PHP</title>
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
    
    <h1>Display Search Data</h1>
<?php
	// sql info or use include 'file.inc'
       //require_once('../../conf/sqlinfo.inc.php');

    $sql_host = 'localhost';
    $sql_user = 'root';
    $sql_pass = '';
    $sql_db = 'serlerdatabase';

	// The @ operator suppresses the display of any error messages
	// mysqli_connect returns false if connection failed, otherwise a connection value
	$conn = mysqli_connect($sql_host,
		$sql_user,
		$sql_pass,
		$sql_db
	);
  
	// Checks if connection is successful
	if (!$conn) {
		// Displays an error message
		echo "<p>Database connection failure</p>";
	} else {
		// Upon successful connection
		
		// Get data from the form
		$title = $_GET["title"];
        $author = $_GET["author"];
        $year = $_GET["year"];
	
		// Set up the SQL command to retrieve the data from the table
		// % symbol represent a wildcard to match any characters
		// like is a compairson operator
		$query = "select * from evidenceitems where title like '$title%' OR author like '$author%' OR year like '$year%'";
		
		// executes the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		// checks if the execuion was successful
		if(!$result) {
			echo "<p>Something is wrong with ",	$query, "</p>";
		} else {
			// Display the retrieved records
			// retrieve current record pointed by the result pointer
			// Note the = is used to assign the record value to variable $row, this is not an error
			// the ($row = mysqli_fetch_assoc($result)) operation results to false if no record was retrieved
			// _assoc is used instead of _row, so field name can be used
			while ($row = mysqli_fetch_assoc($result)){
                echo "<div class = searchdisplay>";
				echo "<br> TITLE: ",$row["title"];
				echo "<br> AUTHOR: ",$row["author"],"";
				echo "<br> JOURNAL: ",$row["journal"],"";
				echo "<br> YEAR: ",$row["year"],"";
                echo "<br> CREDIBILITY: ",$row["credibility"],"";
				echo "<br> RATED BY: ",$row["ratedby"],"";
				echo "<br> METHOD: ",$row["method"],"";
				echo "<br> PRACTISE: ",$row["practise"],"";
                echo "<br> WHO: ",$row["who"],"";
				echo "<br> WHAT: ",$row["what"],"";
				echo "<br> WHERE: ",$row["where"],"";
				echo "<br> WHEN: ",$row["when"],"";
                echo "<br> HOW: ",$row["how"],"";
                echo "<br> WHY: ",$row["why"],"</>";
                echo "<br> CONFIDENCE: ",$row["confidence"],"";
                echo "<br> CREDIBILITY RATING:",$row["credibility"],"";
                echo "</div>";
			}
			echo "</table>";
			// Frees up the memory, after using the result pointer
			mysqli_free_result($result);
		} // if successful query operation
		
		// close the database connection
		mysqli_close($conn);
	} // if successful database connection
?>
</body>
</html>




