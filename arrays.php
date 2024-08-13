<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $fruits = array("apple, banana", "Cherry");
        // unset($fruits[1]);
        // array_splice($fruits, 0, 1);
        // echo($fruits[1]);
        // array_push($fruits, "Mango");
        // print_r($fruits);

        // Associative Arrays
        $tasks = [
            "laundry" => "Daniel",
            "trash" => "Frida",
            "vacuum"=> "Basse",
            "dishes" =>"Bella"
        ];

        //echo count($tasks);
        $tasks['dusting'] = "Tara";
        sort($tasks);
        print_r($tasks);

        $food = [
            "fruits" => array("apple", "banana", "cherry"),
            "meat" => array("chicken", "fish"),
            "vegetables" => array("cucumber", "carrot")
        ];

        echo $food["vegetables"][0];
    ?>

</body>
</html>