<?php
    function APIGateway($path){
        //  $url= 'https://similumina.my.id/api/' .$path 
        //  $data= json_encode($array)
        //  $response= http::($url);
        //  return $data
        $data=  app('App\Http\Controllers'.$path)->index();        
        return $data;
    }
