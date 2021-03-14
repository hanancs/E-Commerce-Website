<?php
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
session_start();

echo "<div class=formStyle loginStyle> ";
echo "<form class='form noBorders' action= login_process.php method=post>";
echo "<table class='signupform noBorders'>";
echo "<tr>";
echo "<td>User's Email:</td>";
echo "<td><input type='text' name='email' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Password:</td>";
echo "<td><input type='text' name='password' size='' legnth=''></td>";
echo "</tr>";
echo "<tr>";
echo "<td><button id=submitbtn type='submit' name='submit'>Log In</button></td>";
echo "</form>";
echo "<form action=login.php method=post>";
echo "<td><button name='clear'>Clear</button></td>";
if(isset($_GET['clear'])) {
    session_destroy(); // Or other session-unsetting logic
     // Reload your page
  }
echo "</tr>";
echo "</table>";
echo "</div>";

include("footfile.html"); //include head layout
echo "</body>";
?>