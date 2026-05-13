<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $section = $_POST['section'];
    $branch = $_POST['branch'];
    $gender = $_POST['gender'];
    $mobileno = $_POST['phone'];
    $address = $_POST['address'];
    $marks = $_POST['marks'];

    echo "<h4>Name: ".$name."</h4>";
    echo "<h4>Roll No: ".$rollno."</h4>";
    echo "<h4>Section: ".$section."</h4>";
    echo "<h4>Branch: ".$branch."</h4>";
    echo "<h4>Gender: ".$gender."</h4>";
    echo "<h4>Mobile No: ".$mobileno."</h4>";
    echo "<h4>Address: ".$address."</h4>";
    echo "<h4>Marks: ".$marks."</h4>";

}
else {

    echo "Try again.";

}

?>