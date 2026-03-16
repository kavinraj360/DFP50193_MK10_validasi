<!DOCTYPE html>
<html>
<head>
<title>Form Result</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 class="title">Application Result</h2>

<?php

$name = $_POST['name'];
$matric = $_POST['matric'];
$age = $_POST['age'];
$date = $_POST['date'];
$computer = $_POST['computer'];
$reason = $_POST['reason'];
$gender = $_POST['gender'];

$error = false;

if($name == ""){
echo "<p class='error'>Name cannot be empty</p>";
$error = true;
}

if($matric == ""){
echo "<p class='error'>Matric number cannot be empty</p>";
$error = true;
}

if($age == ""){
echo "<p class='error'>Age cannot be empty</p>";
$error = true;
}

if($date == ""){
echo "<p class='error'>Date cannot be empty</p>";
$error = true;
}

if($computer == ""){
echo "<p class='error'>Please select computer type</p>";
$error = true;
}

if($reason == ""){
echo "<p class='error'>Reason cannot be empty</p>";
$error = true;
}

if(strlen($reason) < 25){
echo "<p class='error'>Reason must be at least 25 characters</p>";
$error = true;
}

if($error == false){

echo "<p class='success'>Application Submitted Successfully</p>";

echo "<p>Name: $name</p>";
echo "<p>Matric: $matric</p>";
echo "<p>Age: $age</p>";
echo "<p>Date: $date</p>";
echo "<p>Computer: $computer</p>";
echo "<p>Gender: $gender</p>";
echo "<p>Reason: $reason</p>";

}

?>

<br>

<a href="form.php" class="link">Back to Form</a>

</div>

</body>
</html>