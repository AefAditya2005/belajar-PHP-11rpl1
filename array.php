<?php
$nama = "rizky catur";
echo $nama , "<br>";

$nama_array = array("faris", "eben", "haikal");
print_r($nama_array); echo "</br>";

echo $nama_array[0] .  "<br>";
echo $nama_array[1] . "<br>";
echo $nama_array[2] . "<br>";

echo "<hr>";
//versi foreach
foreach ($nama_array AS $datanama) {
    echo $datanama . "<br>";
}

echo "<hr>";
// Versi For
for ($i = 0; $i <= COUNT($nama_array); $i++) {
    echo $nama_array[$i] . "<br>";
}
echo "<br>";
//multiple Array
$kelas11rpl1 = array(
    array("rizky catur", "L", "Mancing"),
    array("eben", "L", "Maen bola"),
    array("faris", "L", array ("Berenang", "maen game", "basket")),
    array("volly", array("maen kelereng", array("maen layangan")))
);

echo "<pre>"; print_r($kelas11rpl1); echo "</pre>";

echo"<hr>";
echo $kelas11rpl1[3][1][1][0];