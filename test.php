<?php

$arr = [
    'create' => ['localhost/router/create/{id}'],
    'form' => ['localhost/router/form/'],
    'update' => ['localhost/router/update/{id}'],
    'view' => ['localhost/router/view/'],
];
foreach ($arr as $key => $value) {
    echo strpos($value[0], "{")."\n";
    echo strpos($value[0], "}");
    echo "\n\n";
    $x = substr($value[0], 24, 3);
    // $x = 25;
    echo $x;
}


