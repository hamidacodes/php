<?php

// class Greetable {
//     public function greet() {
//         return "Hello!";
//     }
// }

// $object =new class extends Greetable {
//     public function greet() {
//         return parent::greet() ;
//     }
// };


// echo $object->greet();



// cloning and copy

// &

// class Hamida {
//     public $name='Merhaba';
// }

// $turkan = new Hamida();

// echo $turkan->name;


// $object1=new stdClass();
// $object1->name="John";


// $object2=$object1;
// $object2->name="Doe";

// echo $object1->name;
// echo $object2->name;

// $object1=new stdClass();
//  $object1->name="John";


// $object2=clone $object1;
// $object2->name="Doe";

// echo $object1->name;
// echo $object2->name;



// class Product {
//     public $name;


//     public function __clone() {
//         $this->name="Cloned:" .$this->name;
//     }
// }

// $product1=new Product();
// $product1->name="Laptop";

// $product2=clone $product1;

// echo $product1->name ."<br>";
// echo $product2->name ."<br>";



// class ProductManager{
//     private $filePath;

//     public function __construct($filePath)
//     {
//         $this->filePath =$filePath;
//     }

//     public function saveProducts(array $products) {
//         $jsonData=json_encode($products,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

//         // echo "<pre>";
//         // print_r($jsonData);
//         //    echo "</pre>";

//         if (json_last_error()===JSON_ERROR_NONE) {
//             file_put_contents($this->filePath,$jsonData);
//             echo "Mehsullar ugurla saxlanildi\n";
//         }else{
//             echo "JSON xeta :" .json_last_error_msg() . "\n";
//         }
//     }

//     public function loadProducts() {
//         if (!file_exists($this->filePath)) {
//             echo "Fayl movcud deyil";
//             return [];
//         }

//         $jsonData=file_get_contents($this->filePath);
//         $products=json_decode($jsonData,true);

//         if(json_last_error()==JSON_ERROR_NONE) {
//             return $products;
//         } else {
//             echo "Json xeta mesaji:" . json_last_error() . "\n";
//             return[];
//         }
//     }
// }

// $productManager = new ProductManager('products.json');

// $products = [
//     [
//         'id'=>1,
//         'name'=>'Telefon',
//         'price'=>1000,
//         'stock'=>50

//     ],

//     [
//         'id'=>2,
//         'name'=>'Laptop',
//         'price'=>2000,
//         'stock'=>20
//     ]
// ];

// $productManager->saveProducts($products);

// $loadedProducts =$productManager->loadProducts();

// echo "<pre>";
//     print_r($loadedProducts);
// echo "</pre>";




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

        return json_decode($response,true);
    }
}

$apiClient = new ApiClient('https://v6.exchangerate-api.com/v6/351b53f51aec151c3a55019c/latest/');

$data=$apiClient->get("USD");

// echo "<pre>";
// print_r($data->conversion_rates->AZN);
// echo "</pre>";

echo "1 USD - > EUR " .$data->conversion_rates->EUR . "<br>";