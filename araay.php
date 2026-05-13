<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>PHP Array Program</title>

</head>

<body>

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
    ?>

</body>

</html>
