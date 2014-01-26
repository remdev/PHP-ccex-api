<?php
/**
 * API-call related functions
 *
 * @author Remdev
 * @license MIT License - https://github.com/Remdev/PHP-ccex-api
 */

class CcexAPI {
    
    protected $api_url = "https://c-cex.com/t/";
    
    protected function query($url) {
        $opts = array('http' =>
            array(
                'method'  => 'GET',
                'timeout' => 10 
            )
        );
        
        $context  = stream_context_create($opts);
        $feed = file_get_contents($url, false, $context);
        return $feed;
    }
    
    
    public function getTickerInfo($pair){
        return json_decode($this->query($this->api_url.$pair.'.json'), true );
    }
    
    
    public function getPairs(){
       $feed = $this->query($this->api_url.'pairs.json');
       // data is not valid json, so we use some hacks
       $feed = str_replace('{"pairs":{"','',$feed);
       $feed = str_replace('"}}','',$feed);
       return explode('","',$feed);
    }
}


