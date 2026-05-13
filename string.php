<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Manipulation</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .container {
            width: 500px;
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

        p {
            font-size: 18px;
        }

    </style>
</head>

<body>

    <div class="container">

        <h2>PHP String Manipulation Program</h2>

        <?php

        $string = "Hello, World!";

        // String Length
        $length = strlen($string);
        echo "<p><b>Length:</b> $length</p>";

        // Reverse String
        $reverse = strrev($string);
        echo "<p><b>Reverse:</b> $reverse</p>";

        // Substring
        $substring = substr($string, 7, 5);
        echo "<p><b>Substring:</b> $substring</p>";

        // Uppercase
        $uppercase = strtoupper($string);
        echo "<p><b>Uppercase:</b> $uppercase</p>";

        // Lowercase
        $lowercase = strtolower($string);
        echo "<p><b>Lowercase:</b> $lowercase</p>";

        ?>

    </div>

</body>

</html>