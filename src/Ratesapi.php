<?php
namespace Bijondev\Ratesapi;

use GuzzleHttp\Client;
class Ratesapi{
    private $client;

    public function __construct()
    {
        $this->client= new Client();
    }
    public function getLatestRate($pram=''){
   
        if($pram){
            $query="?1=1";
            if(isset($pram['currency'])) {
                $query .="&symbols=".implode(',',$pram['currency']);
            }
            if(isset($pram['base'])){
                $query .="&base=".$pram['base'];
            }
            
        }
        
        
        $response=$this->client->get('https://api.ratesapi.io/api/latest'.$query);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            $response_data= "error api, Please check!!!!";
        }else{
            $response_data=json_decode($response->getBody()->getContents());
        }
        return $response_data;
    }


    public function getRateByDate($date, $pram=''){
   
        if($pram){
            $query="?1=1";
            if(isset($pram['currency'])) {
                $query .="&symbols=".implode(',',$pram['currency']);
            }
            if(isset($pram['base'])){
                $query .="&base=".$pram['base'];
            }
            
        }
        
        
        $response=$this->client->get('https://api.ratesapi.io/api/'.$date.$query);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            $response_data= "error api, Please check!!!!";
        }else{
            $response_data=json_decode($response->getBody()->getContents());
        }
        return $response_data;
    }



}

?>