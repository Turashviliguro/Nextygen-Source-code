<head>

<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1024">

    <meta charset="UTF-8">    
                    
                 
	<title>Best Buy Order Details</title>
	<link href="https://assets.bbystatic.com//sc-bestbuy-style-guide/dist/css/sc-bestbuy-style-guide.min-6088da48bb917e6108be860ff32aeace.css" rel="stylesheet" type="text/css" media="all">

	<link href="dark.css" rel="stylesheet" type="text/css" media="all">
	
	
<body>
<style>
.media-network-ad{
	display:block;
	
}
</style>


	<style>
		.media-network-ad .header-banner {
		    min-height: 81px;
		    text-align: center;
		    margin: 15px auto 10px;
		    width: 970px;
		    overflow: hidden;
		}
		.media-network-ad .header-banner.advertisement {
		    padding: 0 0 15px;
		    background: url("https://images-ssl.bbystatic.com/common/images/advertisement_300x250-b06ff59b96630b60eb3a878dba8cbecd.gif") 0 100% no-repeat;
		}
		.ficon-gift-card{

		}
		</style>
<?php
if(isset($_POST['month']) && isset($_POST['day']) &&isset($_POST['year'])&& isset($_POST['order_number']) && isset($_POST['price']) &&isset($_POST['tax']) && isset($_POST['line1']) && isset($_POST['line2']) && isset($_POST['line3']) && isset($_POST['name']) && isset($_POST['img_url']) && isset($_POST['gc']) && isset($_POST['cc'])){
	$month=$_POST['month'];
	$gc=$_POST['gc'];
	$cc=$_POST['cc'];
	$name=$_POST['name'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	$price=$_POST['price'];
	$tax=$_POST['tax'];
	$line1=$_POST['line1'];
	$line2=$_POST['line2'];
	$line3=$_POST['line3'];
	if($_POST['order_number']==""){
		$ordnumb="BBY01-".rand(100000000000,999999999999);
	}else{
		$ordnumb=$_POST['order_number'];
	}
	$img_url=$_POST['img_url'];
	$ordtotal=intval($price)+intval($tax);

echo html_entity_decode("<meta charset='UTF-8'><div id='orderDetailContainer' class='od-container container'><div class='od-title'><h1>Order Details</h1><a href='/profile/orders' class='od-back-button'>See all orders > </a></div><div class='od-title-print'><h1>Order Details <span>BestBuy.com</span></h1></div><div class='od-message js-message-region'><div class='od-message-list'></div></div><div class='od-header js-header-region'><div class='od-summary'><div class='row'><div class='col-xs-1 od-order-date'><div class='od-order-date__month'>".$month."</div><div class='od-order-date__day'>".$day."</div><div class='od-order-date__year'>".$year."</div></div><div class='col-xs-8 od-summary-details'><div class='od-summary-details__abstract' data-ordernumber='BBY01-794377010082'><div class='od-summary-details__order-number'><span>Order Number:</span>".$ordnumb."</div><div class='od-summary-details__order-status od-summary-details__order-status--completed'><span>Order Status:</span> Delivered</div><div class='od-summary-details__order-quantity'>1 item</div></div><div class='od-payment-method'><h3>Payment Method</h3><div class='col-xs-12 od-payment-method__column'><div class='od-payment-method__credit-cards'><div class='od-payment-method__credit-card-container od-payment-method__row'><div class='col-xs-10'><div class='col-xs-7 od-payment-method__credit-card'><i class='hrs' aria-hidden='true'><img src='../images/df.png'></i><div><span data-qa='creditcardinfo'>My Best Buy&#174;  Credit Card ****2107</span></div></div><div class='col-xs-5 od-payment-method__billing-address'></div></div><div class='col-xs-2'><div class='od-payment-method__credit-amount'>$".$cc."</div><div class='od-payment-method__status '></div></div></div></div><div src='../images/gf.png'class='od-payment-method__row od-payment-method__gift-card'><i  src='../images/gf.png' aria-hidden='true'><img style='width:50px;height:32px;' src='../images/gf.png'></i><ul><li><div class='col-xs-8'><h4>Gift Card</h4>Gift Card ****3576</div><div class='col-xs-4'><div class='od-payment-method__gift-card-amount'>$".$gc."</div><div class='od-payment-method__status '></div></div></li></ul></div></div></div></div><div class='col-xs-4 od-summary-totals'><div class='od-order-total'><h3>Order Summary<span><a href='#' class='od-order-total__print' onclick='window.print();return false;'><i></i>Print</a></span></h3><ul><li>Product Total <span>$".$price."</span></li></ul><ul class='od-item-total__adjustments'><li>Shipping <span>FREE</span></li></ul><ul class='od-order-total__list'><li class='od-order-total__header od-order-total__header--normal'><div class='col-xs-8'>Sales Tax, Fees &amp; Surcharges</div><div class='col-xs-4'><span>$".$tax."</span></div></li></ul><ul class='od-order-total__list'><li class='od-order-total__header od-order-total__total'>Order Total <span>$".$ordtotal."</span></li></ul></div></div></div></div></div><div class='od-content js-content-region container-fluid'><div class='od-item-list'><div class='row od-item-list__title'><div class='col-xs-12'><h2>Item Details</h2></div></div><div class='od-item-list__content js-order-item-list'><div class='row od-item'><div class='col-xs-12 od-item__message'></div><div class='col-xs-9 od-item__summary'><div class='col-xs-6'><div class='od-item-summary'><img src='".$img_url."' alt='' title='' class='od-item-summary__thumb'><div><span class='od-item-summary__title'>".$name."</span><ul class='od-item-summary__details'><li><span>SKU:</span> 1319385</li><li class='od-item-summary__quantity'><span>Quantity:</span> 1</li></ul></div></div></div><div class='col-xs-6'><div class='od-item-shipping'><h3>Shipping Address</h3><div class='od-item-shipping__address'>".$line1."<br>".$line2."<br>".$line3."</div></div></div><div class='col-xs-12 od-item__separator'>		</div><div class='col-xs-12'><div class='od-item-status-tracker'><div class='od-item-status-tracker__status    '>Status: <span>Delivered</span><div class='od-item-status-tracker__status--quanitiy'><strong>Quantity:</strong> 1</div></div>									<div class='od-item-status-tracker__tracking'><div class='od-item-status-tracker__icon '><i class='icon-primary ficon-box'></i><i class='icon-circle-checkmark ficon-checkmark-circle'></i></div><div class='od-item-status-tracker__details od-item-status-tracker__details--with-icon '><p>Good news! Your item has been delivered.</p></div></div></div></div></div><div class='col-xs-4 od-item__totals'><div class='od-item-total'><h3>Item Total <span>$".$ordtotal."</span></h3><ul><li>Product Price <span>$".$price."</span></li></ul><ul class='od-item-total__adjustments'></ul><ul class='od-item-total__list'><li class='od-item-total__header'><div class='col-xs-8'>Sales Tax, Fees &amp; Surcharges</div><div class='col-xs-4'><span>$".$tax."</span></div></li></ul></div></div><div class='col-xs-12 od-item__returns'></div><div class='col-xs-12 od-item__child'><div class='col-xs-9 od-item__summary'><div class='col-xs-6'><div class='od-item-summary'>");} else{
	header("location:bestbuy.html");
}