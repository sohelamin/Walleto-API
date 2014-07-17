<?php
$Merchant='';  // Set here merchant id
$Currency='';  // Sete currency
$Amount='';  // Product price
$RURL='';	// API Return URL
$Option1='';  // Set your custom option1 here
$Option2='';  // Set your custom option2 here
$Option3='';  // Set your custom option3 here
$Option4='';  // Set your custom option4 here

$EncodedURL=base64_encode("Merchant=$Merchant&Currency=$Currency&Amount=$Amount&ReturnURL=$RURL&Option1=$Option1&Option2=$Option2&Option3=$Option3&Option4=$Option4");


//echo $EncodedURL;


$dd=base64_decode($EncodedURL);
//echo $dd;

?>
<a href="http://ipay.walleto.com.bd/ecommerce/?<?php echo $EncodedURL; ?>" >Pay</a>