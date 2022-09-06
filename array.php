<?php
    echo "Bisa Baca tod <br>";
    echo "nak kene lo voss ";

    $buah = ["Aids","kangker prostat", 500, "raja singa","STD", 300, 2.5];

    echo "<br>";
    echo $buah[0];

    echo "<br>";

    foreach ($buah as $key => $value) {
       echo $key . "=>" . $value;
       echo "<br>";
    }

    // array asosiatif

    $jumlah = ['Aids'=> 300, 'kangker prostat'=> 200, 'STD'=> 100];

    echo "<br>";

    foreach ($jumlah as $key => $value) {
        echo $key . " banyak penderita " . $value;
        echo "<br>";
    }

    echo $jumlah['Aids'];

    echo "<br>";

    $isi = array_keys($jumlah);
    var_dump ($isi);
    echo "<br>";
    echo $isi[0];

?>
