<?php
function finder($sum, $product)
{

    $inner_root = ($sum * $sum) - (4 * $product);

    if ($inner_root >= 0)
    {

        $b = ($sum + sqrt($inner_root)) / 2;
        $a = $sum - $b;

        return array("numbers" => array($a, $b));

    } else {
        echo "No Solution Found";
    }
}

$result = finder(6, -72);

print_r($result["numbers"]);