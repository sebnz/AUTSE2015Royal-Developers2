<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Post Status Process">
    <title>Post Status Process</title>   
  </head>
  </body>

    <?php
		//David Gutla 1391188
        include "addevidenceitemform.php";

        class evidenceitem {
            
            // Creating variables that will hold the appropriate fields
            public static $title, $author, $journal, $year, $credibility, $ratedby, $method, $practise, $who, $what, $where, $when, $how, $why, $confidence;
            
			//pass POST method to make all variables accessible globally
            public function __construct($title, $author, $journal, $year, $credibility, $ratedby, $method, $practise, $who, $what, $where, $when, $how, $why, $confidence) {
                
                $this->title = $title;
                $this->author = $author;
                $this->journal = $journal;
                $this->year = $year;
                $this->credibility = $credibility;
                $this->ratedby = $ratedby;
                $this->method = $method;
                $this->practise = $practise;
                $this->who = $who;
                $this->what = $what;
                $this->where = $where;
                $this->when = $when;
                $this->how = $how;
                $this->why = $why;
                $this->confidence = $confidence;
                
            }
            //validation
            //make sure that all the variables entered by user are valid and appropriate
            public function validateEntries() {
                
                $title = $this->title;
                $author = $this->author;
                $journal = $this->journal;
                $year = $this->year;
                $credibility = $this->credibility;
                $ratedby = $this->ratedby;
                $method = $this->method;
                $practise = $this->practise;
                $who = $this->who;
                $what = $this->what;
                $where = $this->where;
                $when = $this->when;
                $how = $this->how;
                $why = $this->why;
                $confidence = $this->confidence;

                
                if($why == null || $who == null || $what == null || $when == null || $where == null || $how == null ) {
                    $message = "Please Enter Text Into the Fields!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    return false;
                    
                } else {
                    // ONLY if all condition pass, initialise the variables so that they can be use for SQL
                $this->title = $title;
                $this->author = $author;
                $this->journal = $journal;
                $this->year = $year;
                $this->credibility = $credibility;
                $this->ratedby = $ratedby;
                $this->method = $method;
                $this->practise = $practise;
                $this->who = $who;
                $this->what = $what;
                $this->where = $where;
                $this->when = $when;
                $this->how = $how;
                $this->why = $why;
                $this->confidence = $confidence;
                    return true;
                }
                
            }
            
            
          }

        //class for manipulating the database
        class DB extends evidenceitem {
            
            public static $conn;
            
            public function connect_to_db() {
                
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'serlerdatabase';
                //create connection
                $this->conn = mysqli_connect($host, $user, $pass, $db);
                $conn = $this->conn;
                


                // Check connection
            
                if ($conn->connect_error) {
            
                    die("Connection failure: " . $conn->connect_error);
                    return false;
                
                } else {
                
                    echo "Connection Successful!";
                    return true;
                
                }
                
                
            }
            //inject all validated values in hte sql database
            public function inject_values($title, $author, $journal, $year, $credibility, $ratedby, $method, $practise, $who, $what, $where, $when, $how, $why, $confidence) {
                //enter local variables into database
                $inject = "INSERT INTO `evidenceitems` (`title`, `author`, `journal`, `year`, `credibility`, `ratedby`, `method`, `practise`, `who`, `what`, `where`, `when`, `how`, `why`, `confidence`)
                VALUES ('". $title . "', '". $author . "', '". $journal . "', '". $year . "', '". $credibility . "', '". $ratedby . "', '". $method . "', '". $practise . "', '". $who . "', '". $what . "', '". $where . "', '". $when . "', '". $how . "', '". $why . "', '". $confidence . "');"; 
                
                
                if (mysqli_query($this->conn, $inject)) {
                    $message = "New Record Created Successfully!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
					$message = "Error!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    echo "Error: " . $inject . "<br>" . mysqli_error($this->conn);
                }
				
				mysqli_close($this->conn);
                
                
                
                
            }
            


        }
        //Main
        // Using the post method to pass the variables for validation
        $validate = new evidenceitem($_POST['title'], $_POST['author'], $_POST['journal'], $_POST['year'], $_POST['credibility'], $_POST['ratedby'], $_POST['method'], $_POST['practise'], $_POST['who'], $_POST['what'], $_POST['where'], $_POST['when'], $_POST['how'], $_POST['why'], $_POST['confidence']);
		//ONLY connect and update database if all entries are valid
        if ($validate->validateEntries() == true) {
            echo "going through";
            $database = new DB($validate->title, $validate->author, $validate->journal, $validate->year, $validate->credibility, $validate->ratedby, $validate->method, $validate->practise, $validate->who, $validate->what, $validate->where, $validate->when, $validate->how, $validate->why, $validate->confidence);
            if ($database->connect_to_db() == true) {
                
                echo "SUCCESS!!";
                $database->inject_values($validate->title, $validate->author, $validate->journal, $validate->year, $validate->credibility, $validate->ratedby, $validate->method, $validate->practise, $validate->who, $validate->what, $validate->where, $validate->when, $validate->how, $validate->why, $validate->confidence);  
                
            } else {
                
                echo "fail";
            }
            
            
            
        }

            
        
         
    ?>
    
</html>