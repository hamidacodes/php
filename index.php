<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   

<?php


// PHP   7.4

    // FN-oxlu funksiyani yaratmaq ucun istifade olunur.esas xususiyyeti bir setirde yazila bilir deyerleri avtomatik return edir.

    // $oxluAnonimFUnkiya=fn($number) => $number *2;


    // $oxluAnonimFUnkiya(5);


    // // oxlu funksiyalar xarici deyisenleri avtomatik ozlerine baglayir

    //  $n=9;

    //  $test=fn($param)=>$param * $n;

    //  echo $test(5) . "<br>";
    //   echo $n;


    //   //   &-referal 

    //  $m=2;

    //  $numune=fn(&$eded)=>$eded +=20;

    //  echo $numune($m) . "<br>";

    //  echo $m;




    //  function topla ($a,$b){
    //     return $a + $b;
    // }

 

    //   function cix ($a,$b){
    //     return topla($a,$b) - topla($a,$b);
    // }

    //  echo cix(10,5);

    // recursiv funksiya

    // function faktorial($n){
    //     if($n==0){
    //       return 1;
    //     }


    //       return $n * faktorial ($n-1);
        
    // }

    // echo faktorial(5);



        // ...
    // function ureyinIstiyenQeder(...$items){
    //     foreach($items as $item){
    //         echo $item . "<br>";
    //     }
    // }

    // ureyinIstiyenQeder("armud","banana","portaqal","ciyelek","feyxoa")

// function printLanguages($a,$b,$c){
//         echo "Programming languages: $a,$b,$c <br>";
//      }

//      $Languages=["Phython","JavaScript","PHP"];

//     printLanguages(...$Languages);




//    class Car {

//     // propery
//       public $color;
//       public $model;



//     //  metod
//       public function start() {
//         echo "Avtomobil ise dusdu. <hr>";
//       }
//    }

//    $bmw = new Car ();
//    $bmw->color="qirmizi";
//    $bmw->model="Bmw X5";

//    echo $bmw->color . "<br>";
//    echo $bmw->model . "<br>";
//     $bmw->start();

//    $mercedes = new Car ();
//    $mercedes->color="boz";
//    $mercedes->model="mercedes S-class";

//    echo $mercedes->color . "<br>";
//    echo $mercedes->model . "<br>";
//     $mercedes->start();




//     $dodge = new Car ();
//     $dodge->color="qara";
//     $dodge->model="dodge hellcat";

//     echo $dodge->color . "<br>";
//     echo $dodge->model . "<br>";
//     $dodge->start();








    
// Access Modifiers

  // public-hem class icinde hem class colunde el catan olur.her yerde istifade edile bilir en genis giris icazesine  sahibdir





  // private-yalniz classin icersinde isleye bilir





  // protected-classin daxilinde isleye bilir.




  // inheritance-irsiyyet.

//   class test{
//     public $name = "Jhon Doe";

//     public function sayHello() {

//       echo "Hello,my name is" . $this->name;

//     }




//   }

//   $test = new Test();
//   echo $test->name;
//   $test->sayHello()

    
// class ParentClass {

//   protected $info = "This is a parent class. <br>";

//   protected function showInfo() {
//       echo "This is a protected method in the parent class.";
      

//    }



// }




// class ChildClass extends ParentClass {
  
//   public function accessProtected(){

//     echo $this->info;
//     $this->showInfo();


//   }




// }

// $child=new ChildClass();

// $child->accessProtected();


// static keyword-class obyekt yaradilmadan istifade edile biler.

// static property ve metodlar-classa mexsusdur.

// this acar sozu ile istiade edile bilmez evezinde sekf ve ya static istifade oluna biler.

// class Counter {
//   public static $count =0;


//   public static function increment() {
//     self::$count++;
//   }
// }

// $a = new Counter ();


// Counter::increment();
// Counter::increment();
// echo Counter::$count;


// class Math {

//    public static function add ($a,$b){
//     return $a+$b;
//    }
   
//  }

//  $result=Math::add(5,10);

// echo "The result of addition is:" .$result;

// class User {

//    public static $userCount=0;
  
//    public function __construct()
//    {
//      self::$userCount++;
//    }

//   }

//    $user1=new User();
//    $user2=new User();

//    echo "Istifadeci sayi: " .User::$userCount;


// class Animal {
//   public function sound () {
//     echo "Heyvan sesi cixarir.<br>";
//   }
// }

// class Dog  extends Animal {
//   public function sound () {
//     echo "it hurur hav hav.<br>";
//   }
// }

// class Cat extends Animal {
//   public function sound () {
//     echo "pisik miyolduyur miav miav.<br>";
//   }
// }

// $dog=new Dog ();
// $cat=new cat ();
// $animal=new Animal();


// $dog->sound();
// $cat->sound();
// $animal->sound();


// INTERFACE

          //  OPP de bir nov sablondur interfacede metodlar yalniz elan edilir.yalniz onlarin ici yazilmir(implementation{bezekli moterizenin ozu })         

//    interface Shape {

//     public function area();
//     public function perimetr();


//    }  

//    class Circle implements Shape {

//     private $radius;

//     public function __construct($radius)
//     {
//         $this->radius =$radius;
//     }
    
//      public function area() {
//         return pi() * $this->radius ** 2;
//      }

//      public function perimetr() {
//          return pi() * $this->radius * 2;
//      }
//    }


//    class Rectangle implements Shape {

//     private $width ,$height;

//     public function __construct($width,$height)
//     {
//         $this->width =$width;
//          $this->height =$height;
//     }
    
//      public function area() {
//         return $this->width * $this->height;
//      }

//      public function perimetr() {
//          return ($this->width + $this->height)  * 2;
//      }
//    }

//    $circle = new Circle(5);
//    $rectangle =new Rectangle(4,6);


//    echo "Dairenin sahesi:                   " . $circle->area()           ."<br>";
//    echo "Dairenin perimetri:                " . $circle->perimetr()       ."<br>";
//    echo "Duzbucaqlinin  sahesi:             " . $rectangle->area()           ."<br>";
//    echo "Duzbucaqlinin  perimetri:          " . $rectangle->perimetr()       ."<br>";

// interface Engine {

//     public function start ();

// }


// interface Fuel {

//   public function refuel($liters);

//   }
  


// class Car implements Engine,Fuel {

//   private $fuelLevel =0;

//    public function start() {
//       if($this->fuelLevel > 0) {
//         echo "Masin ise dusdu <br>";
//       } else {
//         echo "Yanacaq yoxdur.<br>";
//       }

//    }

//     public function refuel($liters) {
 
//       $this->fuelLevel += $liters;
//       echo "Yanacaq dolduruldu:$liters litr.Hazirki seviyye:$this->fuelLevel litr teskil edir.<br>";
     
//     }
// }


// $car=new Car();

// $car->start();
// $car->refuel(400);
// $car->start();




// const

// static deyerdir


// ::


// interface MyInterface {
//    const MESSAGE = "Bu bir interface sabitidir";
// }

// class MyClass implements MyInterface{
//   //  const MESSAGE = 200;
// }

// echo MyClass::MESSAGE;

// interface InterfaceA {
//    const GREETING1 ="salam";
// }


// interface InterfaceB {
//   const GREETING2 ="hello";
// }


// class MyClass implements InterfaceA,InterfaceB {

//   public function sayHello() {
//     echo InterfaceA::GREETING1;
//     echo InterfaceB::GREETING2;
//   }

// }

// $obj=new MyClass();
// $obj->SayHello();



// interface Shape {

//   public function area(); 

// }

// class Circle implements Shape {

//   private $radius;

//   public function __construct($radius)
//   {
//     $this->radius=$radius;
//   }

//   public function area() {
//     return pi() * $this->radius ** 2;
//   }
// }

// class Rectangle implements Shape {
//   private $width,$height;

//   public function __construct($width,$height) {
//     $this->width=$width;
//      $this->height=$height;

//   }

//    public function area() {
//      return $this->width * $this->height;
//    }
// }


// $circle = new Circle (5);
// $rectangle =new Rectangle (3,8);

// echo "Dairenin sahesi:" .$circle->area() . "<br>";
// echo "Duzbucaqlinin sahesi:".$rectangle->area() ."<br>";



// abstract class Shape {

//     abstract public function area();

//     public function describe() {
//         return "Bu bir şekildir.<br>";
//     }
// }

// class Circle extends Shape {

//     private $radius;

//     public function __construct($radius)
//     {
//         $this->radius = $radius;
//     }

//     public function area() {
//         return pi() * $this->radius ** 2;
//     }
// }

// class Rectangle extends Shape {

//     private $width, $height;

//     public function __construct($width, $height)
//     {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function area() {
//         return $this->width * $this->height;
//     }
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(3, 8);

// echo "Dairenin sahesi: " . $circle->area() . "<br>";
// echo $circle->describe();

// echo "Duzbucaqlinin sahesi: " . $rectangle->area() . "<br>";
// echo $rectangle->describe();







// Traits

// bir class sadece basqa bir dene classi extends ede biler.
 

// trait sayHello {

//   public function hello() {
//      echo "Salam dünya!";
//   }
// }


// class MyClass {

//   use sayHello; 
  

// }
// $obj = new MyClass();
// $obj->hello();


// trait TraitA {

//   public function greet() {
//      echo "Bu Trait A-dir";
//   }
// }


// trait TraitB {

  

//   public function greet() {
//      echo "Bu Trait B-dir";
//   }
  
// }


// class MyClass {

//  use TraitA,TraitB{
//     TraitA::greet insteadOf TraitB;
//     TraitB::greet as sayHello;
//  }  

// }
// $obj = new MyClass();
// $obj->greet();
// $obj->sayHello();

// trait TraitA {

//   public $name = "Trait Turkan ve Hemide";

//   public function greet() {
//      echo $this->name;
//   }
// }



// class MyClass {

//  use TraitA;
    
   

// }
// $obj = new MyClass();
// $obj->greet();


// trait TraitA {

//   abstract public function greet();

// }



// class MyClass {

//  use TraitA;

//  public function greet() {
//   echo "miyav miyav hav hav";
//  }
    
   

// }
// $obj = new MyClass();
// $obj->greet();

// class parentClass {
//    public function sayHello() {
//     echo 'Parent Hemide';
//    }
// }

// trait MyTrait {
//    public function sayHello() {
//     echo 'Hello from Turkan';
//    }
// }

// class ChildClass extends ParentClass {

//     use MyTrait;

// }

// $obj=new ChildClass();
// $obj->sayHello();

// $obj2=new ParentClass();
// $obj2->sayHello();




// class User {

//     //  gizli melumat (private property)

//     private $name;

//     public function setName($name){
//         if (strlen($name)>2) {
//            $this->name=$name;
//         } else {
//            echo "Ad en azi 3 simvol olmalidir!<br>";
//         }
//     }

//     public function getName() {
//        return $this->name;
//     }

//  }

//  $user=new User();
//  $user->setName("ali");
//  echo $user->getName();


// final

// class MyClass {


//    public function sayHello() {
//       echo "Salam bu MyClass-dir";
//    } 

// }


// class ChildClass extends MyClass {
  
// }

// class ParentClass {
//    public function greet() {
//      echo "Salam";
//    }
// }

// magic method 

// __construct()
//__destruct()

//__get()
//__set()

//__call()

//__toString()

// __invoke()

// __clone()


// class MyClass {

//    public function __get($name) {
//      echo "Xasse '$name' movcud deyil ve elcatmazdir";

//    }
   
// }

// $obj= new MyClass();
// $obj->miau;



// class MyClass {

//    public function __call($name,$value) {
//      echo "Metod '$name' movcud deyil ve elcatmazdir";

//    }
   
// }

// $obj= new MyClass();
// $obj->telefon("bir","iki");

// class MyClass {

//    public function __toString() {
//      return "Bu obyekt string olaraq istifade edilir";

//    }
   
// }

// $obj= new MyClass();
// echo $obj;

// class MyClass {

//    public function __invoke($param) {
//      echo "'$param'obyekit bir funskiya kimi cagirilanda avtomatik cagirilan metoda __invoake magic metodu deyilir";

//    }
   
// }

// $obj= new MyClass();
// $obj('Test');




// class MyClass {

//   public $name;

//   public function __construct($name)
//   {
//     $this->name=$name;
//   }

//    public function __clone() {
   
//     $this->name="Klonlanmis" .$this->name;

//    }
   
// }

// $obj1= new MyClass('Turkan');
 
// echo $obj1->name .'<br>';































// // &-referans simvolu
//     $v=3;

//     $funksiya2= function () use ($v){

//         echo $v +=10;
//         echo '<br>';
//     };


//     $funksiya2();

//     echo $v  . '<br>';






//       $factor=3;

//        $funksiya =function($number) {
            
//             global $factor ;
//             echo $number * $factor ."<br>";

//        };

//        $funksiya(5);

//     // Anonim funskiyalar-CLOUSER

//     $funskiyaAdi=function($param) {
      
//         echo $param * 2 . "<br>";


//     };
//     $funskiyaAdi(5);
   






//     $GLOBALS

//     $x=7;
//     $y=8;
//     function cemiHesabla(){

//         $cem = $GLOBALS ['x'] + $GLOBALS ['y'];
//          echo "Cem: " . $cem . "<br>";
//     }

//     cemiHesabla();







//     // lokal ve global funsksiyalar

//       $x=5;
//       $y=10;

//     function cemiHesabla() {
       
//         global $x, $y;
//         $cem = $x + $y;
//         echo "Cem: " .$cem ."<br>";

//     }

//     cemiHesabla();




//      function test($ad) {
        
//         echo "Salam $ad <br>";

//       }
     
//      $funskiyaAdi = 'test';
//      $funskiyaAdi("Elcin");


  
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



//     for($i=0; $i<10; $i++){
//         if($i==5){
//             continue;
//         }

//         echo "$i <br>";
//     }




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




//     try{
//       $number=15;

//       if($number > 10){
//         echo "Reqem 10-dan boyukdur";
//       } else {
//         throw new Exception ("Reqem 10-dan kicikdir");
//       }
//     }catch(Exception $e){
//       echo "Xeta: " . $e->getMessage() . "<br>";
//     }




//      try {
       
//       throw  new Exception ("Bu bir xeta mesajidir");

//      }catch(Exception $e){

//         echo "Xeta:" . $e->getMessage() . "<br>" ;

//      } finally {
       
//         echo "Istisna olsada olmasada isleyen kod bloku";
//      }
  


//     $i=0;

//       do{
//          echo "$i <br>";

//         $i++;
//     }
    
//     while($i<10)





















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



    //  cont in class


    // class Avtomobil 
    // {
    //     const MAX_SPEED = 240;
    //     const MIN_SPEED = 0;

    //     public function getMaxSpeed()
    //     {
    //         return self::MAX_SPEED;
    //     }
    // }



    // $car = new Avtomobil();
    // echo $car->getMaxSpeed(); 

    // echo Avtomobil :: MAX_SPEED;



    require_once 'src/ProjectA/User.php';
    require_once 'src/ProjectB/UserB.php';





        use ProjectB\UserB;
        
        $userB = new UserB();
        echo $userB->greet();





 






































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