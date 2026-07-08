<?php

class ApiClient
{

    private $baseUrl;
    
    public function __construct($baseUrl)
    {
        $this->baseUrl=$baseUrl;
    }

    public function get($endpoint)
    {

        $url=$this->baseUrl . $endpoint;

        // echo $url;
        $ch=curl_init($url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $response =curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
}

$apiClient = new ApiClient('https://v6.exchangerate-api.com/v6/351b53f51aec151c3a55019c/latest/');

$data=$apiClient->get("USD");

// echo "<pre>";
// print_r($data->conversion_rates->AZN);
// echo "</pre>";

echo "1 USD - > EUR " .$data->conversion_rates->EUR . "<br>";