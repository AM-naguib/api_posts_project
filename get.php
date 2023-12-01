<?php

$data = file_get_contents("https://jsonplaceholder.org/posts");
$decoded_data = json_decode($data);




function explodedate($var){
    $ex_date = explode(" ",$var);
    return $ex_date[0];
}
