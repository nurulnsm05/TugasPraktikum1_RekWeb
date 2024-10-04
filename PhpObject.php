// Decode ke PHP Object
$phpObject = json_decode($jsonData);
echo "PHP Object:\n";
echo "Nama: " . $phpObject->nama . "\n";
echo "Umur: " . $phpObject->umur . "\n";
echo "Pekerjaan: " . $phpObject->pekerjaan . "\n";
echo "Hobi: " . implode(", ", $phpObject->hobi) . "\n";