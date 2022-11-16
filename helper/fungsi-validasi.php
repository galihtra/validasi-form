<?php 

function lolosRequired($nilai) {
    return (bool) @$nilai;
}

function validasi(array $listInput) {

    $request = $_REQUEST;

    foreach($listInput as $input => $listPeraturan) {
        echo "Periksa input <strong>{$input}</strong>";

        foreach($listPeraturan as $peraturan) {
            echo "-> Peraturan <strong>{$peraturan}</strong>";

            if($peraturan === 'required') {
                $lolos = lolosRequired($request[$input]);

                echo $lolos ? "Lolos" : "Tidak Lolos";
            }

            echo "<br>";
        }

        echo "<br>";
        
    }
}

?>