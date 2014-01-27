PHP-ccex-api
============

C-cex.com API class

**How to use:**


require_once('CcexAPI.php');  
$CcexAPI = new CcexAPI({API_KEY});  
*You can use empty API_KEY, if you use __only__ public API (getPairs and getTickerInfo)*    

Get pairs quickexample  
$CcexAPI->getPairs();

Get ticker quick example  
$CcexAPI->getTickerInfo('btc-usd');

Get order list quick example  
$orders = $CcexAPI->getOrders('btc-usd');

