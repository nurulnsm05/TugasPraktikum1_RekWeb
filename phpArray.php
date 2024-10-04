$phpArray = json_decode($jsonData, true);
echo "PHP Array:\n";
echo "Nama: " . $phpArray['nama'] . "\n";
echo "Umur: " . $phpArray['umur'] . "\n";
echo "Pekerjaan: " . $phpArray['pekerjaan'] . "\n";
echo "Hobi: " . implode(", ", $phpArray['hobi']) . "\n";