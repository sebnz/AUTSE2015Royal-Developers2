<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("serlerdatabase",$conn);
$name = $_POST["name"];
$pass = $_POST["pass"];
$result = mysql_query("insert into login (username, password) values ('" . $name . "', '". $pass."')");
    if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}

$check = mysql_query("SELECT * FROM login WHERE username='" . $name . "' and password = '". $pass."'"); 
    
$row  = mysql_fetch_array($check);
if(is_array($row)) {
$_SESSION["user_id"] = $row[username];
$_SESSION["user_name"] = $row[password];
    echo "hello world!";
} else {
$message = "";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:index.php");
}
?>
<html>
<head>
<title>Create Account</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
    
          <div id='cssmenu'>
            <ul>
            <li  ><a href='index.php'>Home</a></li>
                <li class='active'><a href='#' >Create login</a></li>
            <li style="float:right;" ><a href='login.php'>Log in</a></li>
            </ul>
        </div>
      <div class="homeheader">
      <h2>SERLER</h2>
          </div>
    
    
    
    
<body>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Enter a Username</td>
<td><input type="text" name="name"></td>
</tr>
<tr class="tablerow">
<td align="right">Enter a Password</td>
<td><input type="password" name="pass"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
<tr class="tablerow">
<td align="right">UserType (Only Admin can make you a Mod, Analyst or Admin, you will be a 'Registered User' by default)</td>
<td><select name="credibility" id="credibility"> 
            <option value="admin">Administrator</option>
            <option value="mod">Moderator</option>
            <option value="analyst">Analyst</option>
            <option value="user">Registered User</option>
            </select></td>
</tr>    
    
    
</table>
</form>
</body></html>