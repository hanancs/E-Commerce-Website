<?php
$pagename="Your Login Results”"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
session_start();
include("db.php");

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) or empty($password)) {

        echo "<h1>Log In failed!</h1>";
        echo "<p>both fields need to be filled in</p>";
        echo "<p>Go back to Log In: <a href='login.php'>Log In</a> </p>";
        
    } else {
        $SQL="select * from users where userEmail='$email'";
        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
        

        $arrayu=mysqli_fetch_array($exeSQL);

        $nbrecs=mysqli_num_rows($exeSQL);

        if($nbrecs==0){
            echo "Email not recognised, login again";
            echo "<p>Go back to Log In: <a href='login.php'>Log In</a> </p>";
        } else{
            if($arrayu['userPassword'] != $password){
                echo "Password not valid, login again";
                echo "<p>Go back to Log In: <a href='login.php'>Log In</a> </p>";
            } else {
            
                $_SESSION['userid']=$arrayu['userId'];
                $_SESSION['usertype']=$arrayu['userType']; 
                $_SESSION['fname']=$arrayu['userFName'];
                $_SESSION['sname']=$arrayu['userLName'];

                echo "<h1> Login Success </h1>";
                echo "<p><h5>Welcome ". $_SESSION['fname']."</h5></p>";
                echo "<p><h5>User Type:". $_SESSION['usertype']."</h5></p>";

                echo "<p> Continue Shopping for <a href='index.php'>HomeTeq</a> </p>";
                echo "<p> View your basket <a href='basket.php'>Basket</a></p>";

                
            if(isset($_SESSION['userid'])){
                echo "<p>".$_SESSION['fname']."</p>";
    
            }
            }
        }    
        
        
    }

}

echo "<p> Email entered:$email</p>";
echo "<p> Password entered:$password</p>";


include("footfile.html"); //include head layout
echo "</body>";
?>