<?php
session_start();
$pagename="smart basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
include ("db.php");



if(isset($_POST['del_prodid'])){
    $delprodid=$_POST['del_prodid'];

    unset($_SESSION['basket'][$delprodid]); 

    echo "<p>1 item removed</p>";
}

else if(isset($_POST['h_prodid'])){
    $newprodid=$_POST['h_prodid'];
    $requantity=$_POST['p_quantity'];

    $_SESSION['basket'][$newprodid] =   $requantity;

    echo "<p>1 item added</p>";
}

else {
    //echo "<p> Basket unchanged </p>";
}

echo "<table id=baskettable>";
echo "<tr><td>Prdouct Name</td>";
echo "<td>Price</td>";
echo "<td>Quantity</td>";
echo "<td>Subtotal</td>";
echo "<td>Remove Product</td>";  
echo "</tr>";
$total =0;

     
    
if(isset($_SESSION['basket'])){

    
    
    foreach($_SESSION['basket'] as $index => $value)
    {
        $SQL="select prodId, prodName, prodPicNameLarge, prodPrice, prodDescripLong, prodQuantity from Product where prodId=".$index;
        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
        $arrayp=mysqli_fetch_array($exeSQL);
        $subtotal= $arrayp['prodPrice']*$value;
        echo "<tr>";
        echo "<td>".$arrayp['prodName']."</td>";
        echo "<td>&#163;".$arrayp['prodPrice']."</td>";
        echo "<td>".$value."</td>";
        echo "<td>&#163;".$subtotal."</td>";
        
        echo "<form action=basket.php method=post>";
        echo "<td><button>Remove</button></td>";
        echo "<input type=hidden name=del_prodid value=".$index.">";  
        
        echo "</tr>";
        $total += $subtotal;
        
        
    }

    
    
        
} else{
    echo "<p>Empty Basket</p>";
}

echo "<tr>
        <td colspan=4>Total</td>
        <td>&#163;".$total."</td>
        </tr>"; 
echo "</table>";

echo "<a href='clearbasket.php'> Clear Basket</a><br>";

if(isset($_SESSION['userid'])){
    echo "To finalize your order: <a href='checkout.php'>Checkout</a><br>";
} else{
    echo "New Hometeq Customers: <a href='signup.php'>Sign Up</a><br>";
    echo "Returning Hometeg customers: <a href='login.php'>Log In</a><br>";
}


//display random text
include("footfile.html"); //include head layout
echo "</body>";
?>