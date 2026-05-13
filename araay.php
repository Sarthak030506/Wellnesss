<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Program</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .container {
            width: 700px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {
            text-align: center;
            color: darkblue;
        }

        h3 {
            color: darkgreen;
        }

        p {
            font-size: 18px;
        }

        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>PHP Array Example</h2>

    <?php

    // 1. STORING VALUES
    $fruits = array("Apple", "Banana", "Cherry", "Date");

    // Adding one more value
    $fruits[] = "Elderberry";

    // 2. DISPLAY USING FOREACH LOOP
    echo "<h3>1. Displaying using foreach loop:</h3>";

    foreach($fruits as $fruit) {

        echo "<p>$fruit</p>";

    }

    // 3. DISPLAY USING FOR LOOP
    echo "<h3>2. Displaying using for loop:</h3>";

    $arrLength = count($fruits);

    for($i = 0; $i < $arrLength; $i++) {

        echo "<p>Index $i : " . $fruits[$i] . "</p>";

    }

    // 4. DISPLAY USING print_r()
    echo "<h3>3. Displaying using print_r():</h3>";

    echo "<pre>";

    print_r($fruits);

    echo "</pre>";

    // 5. DISPLAY USING var_dump()
    echo "<h3>4. Displaying using var_dump():</h3>";

    echo "<pre>";

    var_dump($fruits);

    echo "</pre>";

    ?>

</div>

</body>

</html>