<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $selected_fruit = $_POST['fruit'];

    echo "Seçdiyiniz meyvə: " . $selected_fruit;
}