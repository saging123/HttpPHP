<?php

$info = [
    ['name' => 'John', 'age' => 29],
    ['name' => 'Suarez', 'age' => 27],
    ['name' => 'Robert', 'age' => 15],
    ['name' => 'Kath', 'age' => 16],
    ['name' => 'Ald', 'age' => 20],
    ['name' => 'Papita', 'age' => 23],
    ['name' => 'Raffy', 'age' => 25],
    ['name' => 'Johnny', 'age' => 26],
];


$name = $_GET['search'];
if (isset($name)) {
    $target = [];
    foreach ($info as $user) {
        if ($name === $user['name']) {
            $target = $user;
            break;
        }
    }
    echo "------RESULT ------<br/>";
    if (!empty($target)) {
       
        echo $target['name'] . " | ".$target['age']." <br/>";
    } else {
        echo "user not found <br/>";
    }
    echo "------END ------<br/>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">
        <label> Search</label>
        <input type="text" name="search" value="<?php echo $_GET['search'];?>">
        <input type="submit" value="Search" >
    </form>
</body>

</html>