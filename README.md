PHP-ccex-api
============

C-cex.com API class

**How to use:**

require_once('CcexAPI.php');  
$CcexAPI = new CcexAPI();

Get pairs quickexample  
$CcexAPI->getPairs();

Get ticker quick example  
$CcexAPI->getTickerInfo('btc-usd');
