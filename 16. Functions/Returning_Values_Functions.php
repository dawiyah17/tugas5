<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
// membuat fungsi
function sum(int $x, int $y) {
    // menjumlahkan parameter
    $z = $x + $y;
    // mengembalikan hasil penjumlahan
    return $z;
}
// mencetak kalimat
echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>

</body>
</html>