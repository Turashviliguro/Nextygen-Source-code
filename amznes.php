<html>
<head>
	<style>
input, select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.button {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
	<title>
	Nextygen Generators - Amazon.es
	</title>
</head>
<div align="center">
<body>
   
<h2> Amazon.es Invoice Generator v2.0 </h2>

<form action="./core/genes.php" method="POST">
  Order Placed :<br>
  <select name="ordmonth">
        <option value="enero">enero </option>
    <option value="febrero">febrero </option>
    <option value="marzo">marzo </option>
    <option value="abril">abril </option>
    <option value="mayo">mayo </option>
    <option value="junio">junio </option>
    <option value="julio">julio </option>
    <option value="agosto">agosto </option>
    <option value="septiembre">septiembre</option>
    <option value="octubre">octubre </option>
    <option value="noviembre">noviembre </option>
    <option value="diciembre">diciembre </option>
  </select>
  <input type="number" name="ordday" value="1">
  <input type="number" name="ordyear" value="2018">
  <br>
  Shipped :<br>
  <select name="shipmonth">
        <option value="enero">enero </option>
    <option value="febrero">febrero </option>
    <option value="marzo">marzo </option>
    <option value="abril">abril </option>
    <option value="mayo">mayo </option>
    <option value="junio">junio </option>
    <option value="julio">julio </option>
    <option value="agosto">agosto </option>
    <option value="septiembre">septiembre</option>
    <option value="octubre">octubre </option>
    <option value="noviembre">noviembre </option>
    <option value="diciembre">diciembre </option>
  </select>
  <input type="number" name="shipday" value="1">
  <input type="number" name="shipyear" value="2018">
  <br><br>
  Item Name (Copy Full Name From Amazon):<br>
  <input type="text" onfocus="this.value=''" onfocus="this.value=''" name="itemname" value="Mouse"><br>
  Item Price:<br>
  <input type="text" name="price" value="15"><br>
  Item Quantity:<br>
  <input type="number" name="quantity" value="1"><br>
  Sold By:<br>
  <input type="text" onfocus="this.value=''" name="soldby" value="Amazon.es"><br>
  Full name:<br>
  <input type="text" onfocus="this.value=''" name="fullname" value="John Doe"><br>
  Street:<br>
  <input type="text" onfocus="this.value=''" name="street" value="8 MCCULLOUGH DR U141414"><br>
  City:<br>
  <input type="text" onfocus="this.value=''" name="city" value="New Castle"><br>
  State:<br>
  <input type="text" onfocus="this.value=''" name="state" value="DE"><br>
  ZIP:<br>
  <input type="text" onfocus="this.value=''" name="zip" value="19726-9000"><br>
  Country:<br>
  <input type="text" onfocus="this.value=''" name="country" value="United States"><br>


  <input type="submit" value="Generate">
</form> 
<br>
<br>
<a href="./" class="button">Go Back</a>
</body>
<script src="../noad.js"></script>
  <?php
  include('../analytics.php');
  ?>
  

</html>

