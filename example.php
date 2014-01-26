<?php
/**
 * CcexAPI examples
 *
 * @author Remdev
 * @license MIT License - https://github.com/Remdev/PHP-ccex-api
 */

require_once('CcexAPI.php');
$CcexAPI = new CcexAPI();

$pairs = $CcexAPI->getPairs();
print_r($pairs);


$tickers = $CcexAPI->getTickerInfo('btc-usd');
print_r($tickers);
