<?php
session_start();

$name = $_POST['name'] ?? "";
$matric = $_POST['matric'] ?? "";
$age = $_POST['age'] ?? "";
$date = $_POST['date'] ?? "";
$computer = $_POST['computer'] ?? "";
$reason = $_POST['reason'] ?? "";
$gender = $_POST['gender'] ?? "";
$software = isset($_POST['software']) ? $_POST['software'] : "";
$printer = isset($_POST['printer']) ? $_POST['printer'] : "";

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
} elseif (strlen($reason) < 25) {
    $errors[] = "Reason must be at least 25 characters";
}

if ($gender == "") {
    $errors[] = "Please select gender";
}

if (count($errors) > 0) {
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Validation Error</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h2>Form Validation Error</h2>";

    foreach ($errors as $error) {
        echo "<p class='error'>$error</p>";
    }

    echo "<br>
            <a href='index.php' class='btn'>Back to Form</a>
        </div>
    </body>
    </html>";
} else {
    // Save into SESSION
    $_SESSION['name'] = $name;
    $_SESSION['matric'] = $matric;
    $_SESSION['age'] = $age;
    $_SESSION['date'] = $date;
    $_SESSION['computer'] = $computer;
    $_SESSION['reason'] = $reason;
    $_SESSION['gender'] = $gender;
    $_SESSION['software'] = $software;
    $_SESSION['printer'] = $printer;

    header("Location: result.php");
    exit();
}
?>