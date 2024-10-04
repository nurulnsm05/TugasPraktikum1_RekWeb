<?php
// Membuat variabel array
$arrayData = [
    "nama" => "Nurul",
    "usia" => 21,
    "hobi" => array("membaca", "menulis", "berkebun"),
    "warna" => "Monocrom",
];

// Encode array ke format JSON
$jsonData = json_encode($arrayData);
echo "Data dalam format JSON: " . $jsonData;
?>