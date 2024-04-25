<!-- 1. MENGURUTKAN HURUF ABJAD DAN ANGKA MULAI DARI YANG TERKECIL DALAM ARRAY -->
<?php
$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

$arr_angka = [];
$arr_huruf = [];

foreach ($array as $i) {
    if (is_numeric($i)) {
        $arr_angka[] = $i;
    } else {
        $arr_huruf[] = $i;
    }
}

sort($arr_angka);
sort($arr_huruf);

$result = array_merge($arr_huruf, $arr_angka);
print_r($result);
?>

<!-- 2. MENAMPILKAN JUMLAH POLA YANG DIINGINKAN -->
<?php
function pattern_count($karakter, $pola)
{
    $count = 0;
    $panjang_kar = strlen($karakter);
    $panjang_pola = strlen($pola);

    for ($i = 0; $i <= $panjang_kar - $panjang_pola; $i++) {
        if (substr($karakter, $i, $panjang_pola) == $pola) {
            $count++;
        }
    }

    return $count;
}

$karakter = "aaaaaa";
$pola = "aa";
echo "Output: " . pattern_count($karakter, $pola);
?>

<!-- 3. MENAMPILKAN JUMLAH HURUF DALAM INPUTAN DENGAN HURUF BESAR DAN KECIL YG BERBEDA -->
<?php
$input = "Masya Allah";

$huruf = str_split(str_replace(' ', '', $input));
$jumlah_huruf = array_count_values($huruf);

foreach ($jumlah_huruf as $char => $jumlah_huruf) {
    echo "Huruf '$char' muncul sebanyak $jumlah_huruf kali<br>";
}
?>