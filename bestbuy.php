<html>
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
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0J1YCKC7EB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0J1YCKC7EB');
</script>
	<title>
	Nextygen Generators -Bestbuy
	</title>

</head>
<div align="center">
<body>
<br>
  <div class="container">
    <div class="col-md-8">
  <form method="POST" action="./core/bb.php">
<h2> Bestbuy.com Invoice Generator v2.0 </h2>
  <div id="platformRating">
  <select style="border-radius: 12px;" name="month" >
    <option style="color:green" value="Jan">January</option>
    <option value="Feb">Feburary</option>
    <option value="Mar">March</option>
    <option value="Apr">April</option>
    <option value="May">May</option>
    <option value="Jun">June</option>
    <option value="Jul">July</option>
    <option value="Aug">August</option>
    <option value="Sep">September</option>
    <option value="Oct">October</option>
    <option value="Nov">November</option>
    <option value="Dec">December</option>

  </select>
  <br><br>
  <input   name="day" type="number" class="form-control" required="" min="1" max="31" placeholder="shipped day"><br><br>
  <input  name="year" type="number" class="form-control" required="" placeholder="shipped year"><br><br>
  
   <input type="hidden" style="margin-top:15px;" name="order_number"  class="form-control" equired="" placeholder="order number (Leave Empty)"><br>
      
    <input name="name" type="text" class="form-control" required="" placeholder="item name"><br>
    <input name="img_url" type="url" class="form-control" required="" placeholder="img_url(add to cart and then copy image link from cart)"><br>
    <input name="price" type="number" step=0.01 class="form-control" required="" placeholder="item price"><br>
    <input name="cc" type="number" step=0.01 class="form-control" required="" placeholder="paid from credit card"><br>
    <input name="gc" type="number" step=0.01 class="form-control" required="" placeholder="paid from gift card"><br>
    <input name="tax" type="text" class="form-control" required="" placeholder="tax"><br>
    <p> <h15>shipping addres for ex</h15>:<br>John Doe<br>
8McCullough Dr. U141414<br>
New Castle,DE 19726 US</p>
    <input name="line1" type="text" class="form-control" required="" placeholder="John Doe"><br>
    <input name="line2" type="text" class="form-control" required="" placeholder="8McCullough Dr. U141414"><br>
    <input name="line3" type="text" class="form-control" required="" placeholder="New Castle,DE 19726 US"><br>
	
 
    <p style="color:white">
    
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