<?php

    $STD = ['Aids', 'Gonorrhea', 'chlamydia'];
    $penyakit = ['Aids'=> 200, 'Gonorrhea'=> 300, 'STD'=>$STD];

    var_dump($penyakit);

    echo "<pre>";
    print_r($penyakit);
    echo "</pre>";

    echo $penyakit['STD'][0] . "<br>";

    foreach ($penyakit as $key => $value) {
        if (!is_array($value)){
            echo $key . " => " . $value;
            echo "<br>";
        }
        else {
            echo $key; 
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
        }

    
    }
?>