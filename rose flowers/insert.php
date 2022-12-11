<?php
include('config.php');
if(isset($_POST['confirming'])){
    $NAME =$_POST['YourName'];
    $COUNTRY =$_POST['Country'];
    $ACCOUNTNUMBER =$_POST['AccountNumber'];
    $CURRENCY =$_POST['Currency'];
    $FLOWERSCOLOER =$_POST['FlowersColor'];
    $ADDRESS =$_POST['Address'];
    $SQUANDER =$_POST['Squander'];
$insert = "INSERT INTO reservation (YourName , Country , AccountNumber , Currency , FlowersColor ,  Address , Squander  ) VALUES ('$NAME',' $COUNTRY','$ACCOUNTNUMBER','$CURRENCY',' $FLOWERSCOLOER ','$ADDRESS',' $SQUANDER')";
mysqli_query($con,$insert);
}
if(isset($_POST['confirming'])){
    echo 'you entered:';
}

?>