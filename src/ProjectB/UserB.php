<?php


   // namespace and use 

    // PHP-də namespace (ad məkanı) eyni adlı class, interface, trait və funksiyaların toqquşmasının qarşısını almaq üçün istifadə olunur.


    namespace ProjectB;

    use ProjectA\User;


    class UserB
    {
        public function greet()

        {
            $userA = new User();
            return $userA->greet();

        }
    }

   
?>