PHP-ccex-api
============

C-cex.com API class

**How to use:**


`require_once('CcexAPI.php');
$CcexAPI = new CcexAPI({API_KEY});`
*You can use empty API_KEY, if you use __only__ public API (getPairs and getTickerInfo)*

Get pairs quickexample
`$CcexAPI->getPairs();`

Get ticker quick example
`$CcexAPI->getTickerInfo('btc-usd');

Get trade volumes for specific pair
`$CcexAPI->getVolumes(24, 'btc-usd')`

Get last trade volumes for all pairs
`$CcexAPI->getVolumes(24)`

Get order list quick example
`$orders = $CcexAPI->getOrders('btc-usd',1);`

Get history list quick example
`$history = $CcexAPI->getHistory('btc-usd',0,time());`

Get self history
`$history = $CcexAPI->getHistory('btc-usd',0,time(),true);`

Make order example
`$status = $CcexAPI->makeOrder('sell','btc-usd',100,820);`

Cancel order example
`$cancel = $CcexAPI->cancelOrder(1228);`