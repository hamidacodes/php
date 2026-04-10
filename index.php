<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   

<?php


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

       $bir=5;
       $iki=&$bir;
       $iki=10;


       echo $bir . "<br>";
       echo $iki . "<br>";

       $number1=5;

    if($number1 > 10){
        echo "Reqem 10-dan boyukdur";
    }

    $number1=5;

    if ($number1 > 10) {
    echo "Reqem 10-dan boyukdur";
} elseif ($number1 == 10) {
    if ($number1 % 2 == 0) {
        echo "Reqem 10-dur ve cutdur";
    } else {
        echo "Reqem 10-dur ve tekdir";
    }
} else {
    echo "Reqem 10-dan kicikdir";
}

<?php         $sert=6; if ($sert ==5):         ?>

       <h1>Birinci sert yerine yetirildi</h1>


   <?php      elseif ($sert>5):        ?> 

        <h1>Ikinci sert yerine yetirildi</h1>   


    <?php       else:                     ?> 

        <h1>Hecbir sert yerine yetirilmedi</h1>  

     <?php       endif; ?>
     

     ?php  $loggedIn = true;?>

<?php if ($loggedIn == true): ?>
    <p>Hesabiniza xoş gəlmisiniz</p>
<?php else: ?>
    <p>Zehmet olmasa daxil olun!</p>
<?php endif; ?>

<?php  $loggedIn = false;?>

<?php if ($loggedIn): ?>
    <p>Hesabiniza xoş gəlmisiniz</p>
<?php else: ?>
    <p>Zehmet olmasa daxil olun!</p>
<?php endif; ?>



















?>

<!-- <script>
let a = {
    'ad': 'Ali'
    'soyad': 'Veli'
    'yas': 30
}
</script> -->

</body>
</html>