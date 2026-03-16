<?php

$name = $_POST['name'];
$matric = $_POST['matric'];
$age = $_POST['age'];
$date = $_POST['date'];
$computer = $_POST['computer'];
$reason = $_POST['reason'];
$gender = $_POST['gender'];

$errors = [];

if ($name == "") {
    $errors[] = "Name cannot be empty";
}

if ($matric == "") {
    $errors[] = "Matric number cannot be empty";
}

if ($age == "") {
    $errors[] = "Age cannot be empty";
}

if ($date == "") {
    $errors[] = "Date cannot be empty";
}

if ($computer == "") {
    $errors[] = "Please select computer type";
}

if ($reason == "") {
    $errors[] = "Reason cannot be empty";
}

if (strlen($reason) < 25) {
    $errors[] = "Reason must be at least 25 characters";
}

if (count($errors) > 0) {

    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }

    echo "<br>";
    echo "<a href='form.php'>Back to Form</a>";

} else {

    header("Location: result.php?name=$name&matric=$matric&age=$age&date=$date&computer=$computer&gender=$gender&reason=$reason");

}

?>