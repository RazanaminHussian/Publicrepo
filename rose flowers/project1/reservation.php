<?php
include 'config.php';

if(isset($_POST['your name']&& isset(&_POST['country']&& isset(&_POST['account number']&& isset(&_POST['currency']&&isset(&_POST['flowers color']) &&isset(&_POST['quantity'])&&isset(&_POST['address'])&& isset(&_POST['squander']){


$your name=$_POST['your name'];
$country=$_POST['country'];
$account number=$_POST['account number'];
$currency=$_POST['currency'];
$flowers color=$_POST['flowers color'];
$quantity=$_POST['quantity'];
$address=$_POST['address'];
$squander=$_POST['squander'];


if (empty($your name)||empty($country)||empty($account number)||empty($currency)||empty($flowers color)||empty($quantity)||empty($address)||empty($squander)){
echo "please ensure that all fields are not empty"; 

}  











<!DOCTYPE html>
<html lang="en-US">
<head>
<title> ROSE FLOWERS-reservation </title>
<meta charset ="UTF-8"/>
<meta http-equiv ="refresh" content ="15"/>
<meta author contnet ="alaa,razan,shima,morouj"/>
<meta name="viewport" content="width=device-width,intital-scale=1.0">
<link rel="stylesheet" type="text/css" href="css22/mycss.css">
</head> 

<body>

<img src="img/images (64).png" width="230" heigth="230">
<header>
<div class="head">
<h1> Rose Flowers </h1>
<ul>
<li> <a href= "rose flowers.php"> Home</a>  </li>
<li> <a href= "reservation.php"> Reservation</a> </li>
<li> <a href= "flowers.php"> Flowers</a> </li>
<li> <a href= "contcat us.php">contact us </a> </li>
</ul>
    </div>
    </header>
<div class="style">
<fieldset>
<legend>Flowers Buy :</legend>
<form  action="" method="post"> 

<p><label> Your name : </label> 
<input type="text"></p>
<p><label>  Country : </label>
<select name="country"> 
<option value ="USA"> USA</option>
 <option value ="France">France </option>
 <option value ="Turkey">Turkey </option>
 <option value ="Russia">Russia </option>
 <option value ="Canada">Canada </option>
 <option value ="Australi">Australi </option>
 <option value ="Mexico">Mexico </option>
 <option value ="Brazil">Brazil </option>
 <option value ="Malaysia"> Malaysia</option>
 <option value ="Thiland">Thiland </option>
 <option value ="Italy">Italy </option>
 <option value ="KSA"> KSA</option>
 <option value ="Oman">Oman </option>
 <option value ="Egypt">Egypt </option>
 <option value ="UAE"> UAE</option>
 <option value ="Lebanon"> Lebanon</option>
    <option value ="Sudan">Sudan </option>  
</select></p>
<p><label>Account Number:</label>
<input type="number"></p>
<lable>Currency :</lable>
<select name="Currency">
 <option value ="USD">USD</option>
 <option value ="EUR">EUR</option>
 <option value ="SAR">SAR</option>
 <option value ="EGP">EGP</option>
 <option value ="SDG">SDG</option>
</select>


<P><lable>Flowers color :</lable>
<select name="Flowers color">
 <option value ="Shell pink">Shell pink</option>
 <option value ="Tulip">Tulip</option>
 <option value ="Sunny day">Sunny day</option>
 <option value ="Berry">Berry</option>
<option value ="Tyrian">Tyrian</option>
<option value ="cobalt">cobalt</option>
 <option value =""></option>
</select>

<div class="radio">
<lable>Quantity :</lable>
    <p><input type="radio" name="gender">100 Roses Hand bouquet</p>
    <p><input type="radio"name="gender">50 Roses Hand bouquet </p>
    <p><input type="radio"name="gender"> The Bashful One Roses Arrangmenet</p>
    <p><input type="radio"name="gender">Your Luxury Box </p>
    <p><input type="radio"name="gender">Do it Yourself Bouquet </p>
</div>
<P><lable> Address: </lable> <textarea name="massage" row="700" cols="45"> </textarea></P>
<p><lable>Squander: </lable> <textarea name="massage" row="700" cols="45"  > </textarea></p>
<input type="submit" value="confirming" >
    </P>
    </form>
    </fieldset>
    </div>
</body>
</html>
?>