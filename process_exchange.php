<?php



// $data =json_decode (  file_get_contents("php://input"),  true   );


// $amount     =$data['amount'];
// $currency   =$data['currency'];


// class ApiClient
// {

//     private $baseUrl;
    
//     public function __construct($baseUrl)
//     {
//         $this->baseUrl=$baseUrl;
//     }

//     public function get($endpoint)
//     {

//         $url=$this->baseUrl . $endpoint;

//         // echo $url;
//         $ch=curl_init($url);
//         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//         $response =curl_exec($ch);

//         curl_close($ch);

//         return json_decode($response, true);
//     }
// }

// $apiClient = new ApiClient('https://v6.exchangerate-api.com/v6/351b53f51aec151c3a55019c/latest/');

// $data=$apiClient->get("USD");

// if( isset($data['conversion_rates'] [$currency])  ) {

//     $rate = $data['conversion_rates'] [$currency];
//     $covertedAmount = $amount * $rate;

//     echo json_encode(['covertedAmount' =>round( $covertedAmount ,2)]);

// } else {
//       echo json_encode(["error"=>"Mezenne tapilmadi"]);
// }