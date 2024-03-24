<?php

include('vendor\autoload.php');

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [190, 236],
    'orientation' => 'L'
]);


?>