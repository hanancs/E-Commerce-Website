<?php
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

session_start();
echo "<div class=formStyle loginStyle> ";
echo "<form id=signupform action=signup_process.php method=post>";
echo "<table>";
echo "<tr>";
echo "<td>First Name:</td>";
echo "<td><input type='text' name='fname' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Last Name:</td>";
echo "<td><input type='text' name='lname' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Address:</td>";
echo "<td><input type='text' name='address' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Post Code:</td>";
echo "<td><input type='text' name='postcode' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Tel No:</td>";
echo "<td><input type='text' name='telno' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Email Address:</td>";
echo "<td><input type='text' name='email' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Password:</td>";
echo "<td><input type='text' name='password' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Confirm Password</td>";
echo "<td><input type='text' name='confirmpassword' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td><button id=submitbtn type='submit' name='submit'>Sign Up</button></td>";
echo "</form>";
echo "<form action=signup.php method=post>";
echo "<td><button name='clear'>Clear</button></td>";
if(isset($_GET['clear'])) {
    session_destroy(); // Or other session-unsetting logic
     // Reload your page
  }
echo "</tr>";
echo "</table>";
echo "</form>";
echo "</div>";
include("footfile.html"); //include head layout
echo "</body>";
?>