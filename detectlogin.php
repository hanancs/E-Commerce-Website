<?php
if(isset($_SESSION['userid'])){
    echo "<p id=userdetails>".$_SESSION['fname']." | User Type: ".$_SESSION['usertype']."</p>";   
}
?>
