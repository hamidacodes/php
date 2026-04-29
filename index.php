<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   

<?php


// &-referans simvolu
    $v=3;

    $funksiya2= function () use ($v){

        echo $v +=10;
        echo '<br>';
    };


    $funksiya2();

    echo $v  . '<br>';






      $factor=3;

       $funksiya =function($number) {
            
            global $factor ;
            echo $number * $factor ."<br>";

       };

       $funksiya(5);

    // Anonim funskiyalar-CLOUSER

    $funskiyaAdi=function($param) {
      
        echo $param * 2 . "<br>";


    };
    $funskiyaAdi(5);
   






    $GLOBALS

    $x=7;
    $y=8;
    function cemiHesabla(){

        $cem = $GLOBALS ['x'] + $GLOBALS ['y'];
         echo "Cem: " . $cem . "<br>";
    }

    cemiHesabla();







    // lokal ve global funsksiyalar

      $x=5;
      $y=10;

    function cemiHesabla() {
       
        global $x, $y;
        $cem = $x + $y;
        echo "Cem: " .$cem ."<br>";

    }

    cemiHesabla();




     function test($ad) {
        
        echo "Salam $ad <br>";

      }
     
     $funskiyaAdi = 'test';
     $funskiyaAdi("Elcin");


  
   function test( int $a, int|float $b) {
       $c= $a * $b;
       echo $c;
   }


   test(3,4.3);





   function test() {
       $a=5;
       $b=10;
       $c= $a * $b;
       echo $c;
   }


   test();







   for($i=0; $i<10; $i++){

      switch($i){

        case 2:
            echo "Bu 2-dir <br>";
          continue 2;

        case 3:
            echo "Bu 3-dir <br>";
            break;   
      }
 

            echo "Dovr: $i <br>";
     }



    for($i=0; $i<10; $i++){
        if($i==5){
            continue;
        }

        echo "$i <br>";
    }




   $fruit="alma";

   switch($fruit){
      case "alma";
         echo "Bu bir almadir";
         break;
       
      case "armud";
         echo "Bu bir armuddur";
         break;
         
       case "heyva";
          echo "Bu bir heyvadir";
          break;
          
        default:
           echo "Bu bir meycve degildir";  
   }




    try{
      $number=15;

      if($number > 10){
        echo "Reqem 10-dan boyukdur";
      } else {
        throw new Exception ("Reqem 10-dan kicikdir");
      }
    }catch(Exception $e){
      echo "Xeta: " . $e->getMessage() . "<br>";
    }




     try {
       
      throw  new Exception ("Bu bir xeta mesajidir");

     }catch(Exception $e){

        echo "Xeta:" . $e->getMessage() . "<br>" ;

     } finally {
       
        echo "Istisna olsada olmasada isleyen kod bloku";
     }
  


    $i=0;

      do{
         echo "$i <br>";

        $i++;
    }
    
    while($i<10)





















// echo "<pre>";
// print_r(
//     [
//         'ad' => 'Ali',
//         'soyad' => 'Veli',
//         'yas' => 30
//     ]
// );
// echo "<pre>";


// sprintf("Ad: %s,Soyad:  %s, Yas:%d", "Ali","Veli",30);


// file_put_contents('test.text' , "Hello World");

//   $name="Ali";
//       $age=20;
//       $isActive=true;
//       $balance=100.50;
//       $x=null;
     
//     $var1=$var2=$var3= "Hello World";  

//     // birden cox deyisken qebul ede bilir
       


//     $name="Ali";
//     $name="Veli";     

//     echo $name;

//     // const - kodda deyismez demekdir.const -la teyin edilen deyeri deyismek mumkun deyil
 
//      const PI=3.14;

//      echo PI;

//      // const hem global hem class icinde istifade edilir ancaq funksiya icinde istifade edilmez
//     // define() hem global hemde funskiya icinde istifade edilir ancaq class icinde istifade edile bilmez
     
//     define("PI",3.14);
//     echo PI;

//     // tek dirnaq icersine degiskenler yazila bilmez,\n ise yeni setr simvoludur

//     $metn1='Bob';
//     echo 'Salam $metn1\n'

//     // cut dirnaq icersinde degiskenler yazila biler \n ise yeni setir simvoludur
//     $metn2="Bob";
//     echo "Salam $metn1\n";

//     // EOL-heredok cox setrli metnler ucun istifade olunur alt alt metnleri ekrana cap etmek ucun istifade olunur

//     $metn2='Bob';

//     $ekranaYazdir = <<<EOL
//     Salam $metn2 sdhfosif
//     fdsojabgfdl
//     segahkrjdsf'
//     sdagfvnakas
//     fashvfslkdf
//     sdvjadf;
//     EOL;

//     echo $ekranaYazdir;


// arraya ozumzude deyer teyin ede bilirik proqram da deyer teyin ede bilir

    // $var1=6;
    // $var2=3.14;
    // $var3=true;
    // $var4='Ali';
    // $var5=[];

    // echo gettype($var1) . "<br>";
    // echo gettype($var2) . "<br>";
    // echo gettype($var3) . "<br>";
    // echo gettype($var4) . "<br>";
    // echo gettype($var5) . "<br>";

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  



// //    OPEARTORLAR
//     // toplama
//    $result1 =5+3;  

// //    cixma
//    $result2 =5-3;

// //    vurma
//    $result3 =5*3;

// //    bolme
//    $result4 =5/3;

// //    qaliqli bolme
//    $result5 =5%3;

//    print ("Toplama:" . $result1 . "<br>");
//    print ("Cixma:" . $result2 . "<br>");
//    print ("Vurma:" . $result3 . "<br>");
//    print ("Bolme:" .  $result4 . "<br>");
//    print ("Mod:" .  $result5 . "<br>");

// $result6 bərabərlik operatoru, dəyərlər bərabərdirsə true, deyilsə false qaytarır
// $result7 eynilik (identik) operatoru, dəyərlər və tiplər eynidirsə true, deyilsə false qaytarır
// $result8 bərabər deyil operatoru, dəyərlər fərqlidirsə true, eynidirsə false qaytarır
// $result9 eyni deyil (identik deyil) operatoru, dəyərlər və tiplər fərqlidirsə true, eynidirsə false qaytarır
// $result10 böyükdür operatoru, dəyərlərdən biri digərindən böyükdürsə true, əks halda false qaytarır
// $result11 kiçikdir operatoru, dəyərlərdən biri digərindən kiçikdirsə true, əks halda false qaytarır
// $result12 böyük və ya bərabərdir operatoru, böyük və ya bərabərdirsə true, kiçikdirsə false qaytarır
// $result13  kiçik və ya bərabərdir operatoru, kiçik və ya bərabərdirsə true, böyükdürsə false qaytarır
// $result14  // spaceship operatoru, əgər dəyərlər bərabərdirsə 0 qaytarır,birinci dəyər ikinci dəyərdən böyükdürsə 1 qaytarır,birinci dəyər ikinci dəyərdən kiçikdirsə -1 qaytarır


    //  $result6 =(5 == 5);
    //  $result7 =(5 === "5");
    //  $result8 =(5 != 3);
    //  $result9 =(5 !== "5");
    //  $result10 =(5 > 3);
    //  $result11 =(5 < 3);
    //  $result12 =(5 >= 5);
    //  $result13 =(5 <= 3);

    //   $result14 =(5 <=> 3);


    //   print($result6 . "<br>");
    //   print($result7 . "<br>");
    //   print($result8 . "<br>");
    //   print($result9 . "<br>");
    //   print($result10 . "<br>");
    //   print($result11 . "<br>");
    //   print($result12 . "<br>");
    //   print($result13 . "<br>");
    //   print($result14 . "<br>");




    // və (AND) operatoru, hər iki dəyər true olarsa true, digər hallarda false qaytarır
// və ya (OR) operatoru, hər iki dəyər false olarsa false, digər hallarda true qaytarır
// // deyil (NOT) operatoru, dəyər true-dursa false, false-dursa true qaytarır

//     $result15=(true && false);
//     $result15=(true || false);
//     $result15=(!true);

//     $x = 5;
//        $x += 1;  // $x dəyərini 1 artırır, $x = 6 olur
//        $x++;     // $x dəyərini 1 artırır, $x = 7 olur

//    BITWISE OPERATORLAR

// $result18 = (5 & 3);   // bitwise AND operatoru, hər iki bit 1 olarsa 1, digər hallarda 0 qaytarır
// $result19 = (5 | 3);   // bitwise OR operatoru, bitlərdən biri 1 olarsa 1 qaytarır
// $result20 = (5 ^ 3);   // bitwise XOR operatoru, bitlər fərqlidirsə 1, eynidirsə 0 qaytarır
// $result21 = (~5);      // bitwise NOT operatoru, bitləri tərsinə çevirir (1 → 0, 0 → 1)
// $result22 = (5 << 1);  // bitwise left shift operatoru, bitləri sola sürüşdürür, sona 0 əlavə edir
// $result23 = (5 >> 1);  // bitwise right shift operatoru, bitləri sağa sürüşdürür

// $result24 = "Hello" . " " . "World!";  // string birləşdirmə (concat) operatoru, iki stringi birləşdirir


// $age = 20;
// // ternary operatoru, şərtə görə dəyər qaytarır
// $result25 = ($age > 18) ? "Yasiniz 18-dən böyük" : "Yasiniz 18-dən kiçik";

// $result26 = $undefinedVariable ?? "degisken tanimlanmamis";

// // Operand
// // operator
   
//     $name=null;

//     $defaultName ="Turkan Hemideni incidir";

//     $result26=$name ?? $defaultName;
//     echo $result26;



// // goto

//     echo "Ilk setrin baslangici <br>";
//     goto skip;

//     echo "bu setr adlanacaq";

//     skip:
//     echo "son setr yazdirilacaqdir";


//  &-referans operatoru-bir deyiseninn referansini basqa bir deyisene teyin etmeye imkan verir 

        // $ad='Turkan';

        // $ad2='Hemide';

    //    $bir=5;
    //    $iki=&$bir;
    //    $iki=10;


//        echo $bir . "<br>";
//        echo $iki . "<br>";

//        $number1=5;

//     if($number1 > 10){
//         echo "Reqem 10-dan boyukdur";
//     }

//     $number1=5;

//     if ($number1 > 10) {
//     echo "Reqem 10-dan boyukdur";
// } elseif ($number1 == 10) {
//     if ($number1 % 2 == 0) {
//         echo "Reqem 10-dur ve cutdur";
//     } else {
//         echo "Reqem 10-dur ve tekdir";
//     }
// } else {
//     echo "Reqem 10-dan kicikdir";
// }



// <!-- assosativ -->
//   <!-- array[] -->
//    <!-- [] -->
    
//     <?php  
//         indexli array tanimlama
//       $fruits=['alma','armud','heyva',['qarpiz','kavun','nar' ,5,true]];

//     print_r($fruits[3]) . "<br>";

    
// $user = [
//     'ad' => 'Ali',
//     'soyad' => 'Veli',
//     'yas' => 30,
//     'adres' => [
//         'seher' => 'Baki',
//         'kuce' => 'Nizami',
//         'evNo' => 10
//     ]
// ];

// echo $user['adres']['seher'] . "<br>"; 
    
    

//  is_ funksiyalari-php-de mueyyen bir tipin ollub olmadigini yoxlamaq ucun is ile baslayan funksiyalar var.

//      $var1 = 5;
// $var2 = "Hello world";
// $var3 = [];

// echo is_int($var1) ? "Integer" : "Not Integer";
// echo "<br>";

// echo is_string($var2) ? "String" : "Not String";
// echo "<br>";

// echo is_array($var3) ? "Array" : "Not Array";
// echo "<br>";


// is_int($var) → tamədəd
// is_string($var) → mətn
// is_array($var) → massiv
// is_bool($var) → true,false
// is_float($var) → kesr ededi
// is_double($var) → kesr ededi
// is_null($var) → boş
// is_object($var) → obyekt



    // is_int($var1);  
    // is_string($var2);
    // is_array($var3);
    // is_bool($var1);
    // is_float($var2);
    // is_double($var3);
    // is_null($var1);
    // is_object($var2);
    // is_resource($var3);

    // fayl resurslari
    // verilenler bazasi elaqeleri
    // sebeke elaqeleri    // 
    // cURL (http sorgulari ucun istifade olunur)
    // sql query resurslari
    // reskil resurslari


//     for($i=5, $j=0;   $i>0,$j<5;   $i--,$j++){

//     echo "$i - $j <br>";
//   }


//   $fruits=[
//        "ad1"=>"Elcin",
//        "ad2"=>"Leyla",
    
//     ];
   
//   foreach($fruits as $key => $value) {
//     echo $key . "=>" .$value . "<br>";
//   }


//   $fruits=[
//        "Auto"=>['dodge','mercedes','audi','bmw'],
//        "Samalyot"=>['boeing','airbus','embraer'],
//        "Gemi"=>['titanic','queen mary','ever given'],
    
//     ];
   
//   foreach($fruits as $key => $arrays) {
//        echo "<b> $key </b>";

//    foreach($arrays as $value) {
//        echo "<li>$value</li>";
//    }

//    echo "<br>";


//   }


// $i=0;
//       while(    $i<10   ){
//        echo "$i <br>";

//        $i++;
//   }1


  
// &-referans simvolu
    // $v=3;

    // $funksiya2= function () use ($v){

    //     echo $v +=10;
    //     echo '<br>';
    // };


    // $funksiya2();

    // echo $v  . '<br>';






    //   $factor=3;

    //    $funksiya =function($number) {
            
    //         global $factor ;
    //         echo $number * $factor ."<br>";

    //    };

    //    $funksiya(5);

    // Anonim funskiyalar-CLOUSER

    // $funskiyaAdi=function($param) {
      
    //     echo $param * 2 . "<br>";


    // };
    // $funskiyaAdi(5);
   






    // $GLOBALS

    // $x=7;
    // $y=8;
    // function cemiHesabla(){

    //     $cem = $GLOBALS ['x'] + $GLOBALS ['y'];
    //      echo "Cem: " . $cem . "<br>";
    // }

    // cemiHesabla();







    // lokal ve global funsksiyalar

    //   $x=5;
    //   $y=10;

    // function cemiHesabla() {
       
    //     global $x, $y;
    //     $cem = $x + $y;
    //     echo "Cem: " .$cem ."<br>";

    // }

    // cemiHesabla();




    //  function test($ad) {
        
    //     echo "Salam $ad <br>";

    //   }
     
    //  $funskiyaAdi = 'test';
    //  $funskiyaAdi("Elcin");


  
//    function test( int $a, int|float $b) {
//        $c= $a * $b;
//        echo $c;
//    }


//    test(3,4.3);





//    function test() {
//        $a=5;
//        $b=10;
//        $c= $a * $b;
//        echo $c;
//    }


//    test();







//    for($i=0; $i<10; $i++){

//       switch($i){

//         case 2:
//             echo "Bu 2-dir <br>";
//           continue 2;

//         case 3:
//             echo "Bu 3-dir <br>";
//             break;   
//       }
 

//             echo "Dovr: $i <br>";
//      }



    // for($i=0; $i<10; $i++){
    //     if($i==5){
    //         continue;
    //     }

    //     echo "$i <br>";
    // }




//    $fruit="alma";

//    switch($fruit){
//       case "alma";
//          echo "Bu bir almadir";
//          break;
       
//       case "armud";
//          echo "Bu bir armuddur";
//          break;
         
//        case "heyva";
//           echo "Bu bir heyvadir";
//           break;
          
//         default:
//            echo "Bu bir meycve degildir";  
//    }




    // try{
    //   $number=15;

    //   if($number > 10){
    //     echo "Reqem 10-dan boyukdur";
    //   } else {
    //     throw new Exception ("Reqem 10-dan kicikdir");
    //   }
    // }catch(Exception $e){
    //   echo "Xeta: " . $e->getMessage() . "<br>";
    // }




    //  try {
       
    //   throw  new Exception ("Bu bir xeta mesajidir");

    //  }catch(Exception $e){

    //     echo "Xeta:" . $e->getMessage() . "<br>" ;

    //  } finally {
       
    //     echo "Istisna olsada olmasada isleyen kod bloku";
    //  }
  


    // $i=0;

    //   do{
    //      echo "$i <br>";

    //     $i++;
    // }
    
    // while($i<10)

























?>

<!-- // <script>
// let a = {
//     'ad': 'Ali'
//     'soyad': 'Veli'
//     'yas': 30
// }
// </script> -->

</body>
</html>