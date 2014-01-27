<?php
/**
 * API-call related functions
 *
 * @author Remdev
 * @license MIT License - https://github.com/Remdev/PHP-ccex-api
 */

class CcexAPI {
    
    protected $api_url = 'https://c-cex.com/t/';
    protected $api_key;
    
    
    public function __construct($api_key = '') {
        $this->api_key = $api_key;
    }
    
    protected function jsonQuery($url) {
        $opts = array('http' =>
            array(
                'method'  => 'GET',
                'timeout' => 10 
            )
        );
        
        $context  = stream_context_create($opts);
        $feed = file_get_contents($url, false, $context);
        return json_decode($feed,true);
    }
    
    
    public function getTickerInfo($pair){
        $json = $this->jsonQuery($this->api_url.$pair.'.json');
        return $json['ticker'];
    }
    
    
    public function getPairs(){
       $json = $this->jsonQuery($this->api_url.'pairs.json'); 
       return $json['pairs'];
    }
    
    
    public function getOrders($pair){
        $json =  $this->jsonQuery($this->api_url."r.html?key={$this->api_key}&a=orderlist&pair={$pair}");
        return $json['return'];
    }
}


