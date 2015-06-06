<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("serlerdatabase",$conn);
$result = mysql_query("SELECT * FROM login WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row[username];
$_SESSION["user_name"] = $row[password];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:loggedinhome.php");
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
    
          <div id='cssmenu'>
            <ul>
            <li  ><a href='index.php'>Home</a></li>
                <li><a href='create.php'>Create login</a></li>
            <li style="float:right;" class='active'><a href='#'>Log in</a></li>
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
<td align="right">Username</td>
<td><input type="text" name="user_name"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
    <tr class="tableheader">
<td align="center" colspan="2">User Type</td>
</tr>

<tr class="tablerow">
<td align="right">UserType</td>
<td><select name="credibility" id="credibility"> 
            <option value="admin">Administrator</option>
            <option value="mod">Moderator</option>
            <option value="analyst">Analyst</option>
            <option value="user">Registered User</option>
            </select></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>