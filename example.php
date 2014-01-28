<?php
/**
 * CcexAPI examples
 *
 * @author Remdev
 * @license MIT License - https://github.com/Remdev/PHP-ccex-api
 */

require_once('CcexAPI.php');
$CcexAPI = new CcexAPI({YOUR_API_KEY});

$pairs = $CcexAPI->getPairs();
print_r($pairs);


$tickers = $CcexAPI->getTickerInfo('btc-usd');
print_r($tickers);

$orders = $CcexAPI->getOrders('btc-usd',1);//1 for self orders and 0 for all orders, default = 0
print_r($orders);

$history = $CcexAPI->getHistory('btc-usd',1389398400,time());//start time and end time in Unix Timestamp.
print_r($history);

$status = $CcexAPI->makeOrder('sell','btc-usd',100,820);//type,pair,quantity and price
print_r($status);

$cancel = $CcexAPI->cancelOrder(1228);// Order id
print_r($cancel);
