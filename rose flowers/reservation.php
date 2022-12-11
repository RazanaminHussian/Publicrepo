
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
<li> <a href= "contact us.php">contact us </a> </li>
</ul>
    </div>
    </header>
<div class="style">
<fieldset>
<legend>Flowers Buy :</legend>
<form action="insert.php" method="post"> 

<p><label> Your name : </label> 
<input name='YourName' type="text"></p>
<p><label>  Country : </label>
<select name="Country"> 
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
<input name='AccountNumber' type="number"></p>
<lable>Currency :</lable>
<select name="Currency">
 <option value ="USD">USD</option>
 <option value ="EUR">EUR</option>
 <option value ="SAR">SAR</option>
 <option value ="EGP">EGP</option>
 <option value ="SDG">SDG</option>
</select>


<P><lable>Flowers color :</lable>
<select name="FlowersColor">
 <option value ="Shell pink">Shell pink</option>
 <option value ="Tulip">Tulip</option>
 <option value ="Sunny day">Sunny day</option>
 <option value ="Berry">Berry</option>
<option value ="Tyrian">Tyrian</option>
<option value ="cobalt">cobalt</option>
 <option value =""></option>
</select>

<P><lable> Address: </lable> <input name='Address' type="text"></P>
<p><lable>Squander: </lable> <input name='Squander' type="text"></p>
<input name='confirming' type="submit" value="confirming" >
    </P>
    </form>
    </fieldset>
    </div>
</body>
</html>