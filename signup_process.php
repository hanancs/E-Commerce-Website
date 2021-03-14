<?php
$pagename="“Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
include("db.php");

session_start();

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];
    $telno = $_POST['telno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    if (!empty($fname or $lname or $address or $postcode or $telno or $email or $password or $cpassword)) {
        if($password != $cpassword){
            echo "<h1>Sign Up failed!</h1>";
            echo "Password doesn't match";
            echo "<p>Go back to sign up: <a href='signup.php'>Sign Up</a> </p>";
        } else{
            if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
                $sql = "INSERT INTO users ( userFName, userLName, userAddress, userPostCode, userTelNo, userEmail, userPassword) VALUES 
                ('$fname', ' $lname', '$address','$postcode','$telno', '$email','$password' )";
                    if(mysqli_query($conn, $sql)){
                        echo "<h1>Sign Up Complete!</h1>";
                        echo "Records added successfully.";
                        echo "<p>Go to Log In page: <a href='login.php'>Log In</a> </p>";

                    } else{
                        echo "<h1>Sign Up failed!</h1>";
                        if(mysqli_errno($conn)==1062){
                            
                            echo "email already taken";
                            
                        }
                        if(mysqli_errno($conn)==1064){
                            
                            echo "No invalid characters such as apostrophes like [ ' ] and backslashes like [ \ ] should be accepted";
                           
                        }
                        echo "<p>Go back to sign up: <a href='signup.php'>Sign Up</a> </p>";
                    }
            
                }
                else
                {
                    
                    echo "<h1>Sign Up failed!</h1>";
                    echo "$email is NOT a valid email address, Please insert your email address correctly.";
                    echo "<p>Go back to sign up: <a href='signup.php'>Sign Up</a> </p>";
                }
            
        }
        
    } else{
        echo "<h1>Sign Up failed!</h1>";
        echo "<p>all mandatory fields need to be filled in</p>";
        echo "<p>Go back to sign up: <a href='signup.php'>Sign Up</a> </p>";
    }
    

} 
include("footfile.html"); //include head layout
echo "</body>";
?>