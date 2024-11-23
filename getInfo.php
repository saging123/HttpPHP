<?php

$info = [
    ['name'=> 'John', 'age'=> 29],
    ['name'=> 'Suarez', 'age'=> 27],
    ['name'=> 'Robert', 'age'=> 15],
    ['name'=> 'Kath', 'age'=> 16],
    ['name'=> 'Ald', 'age'=> 20],
    ['name'=> 'Papita', 'age'=> 23],
    ['name'=> 'Raffy', 'age'=> 25],
    ['name'=> 'John', 'age'=> 26],
];


$id = $_GET['id']; // 2
$user = $info[$_GET['id']];
if(!empty($user)){
    echo $user['name']."<br/>";
    echo $user['age']."<br/>";
}else{
    echo "user not found";
}
