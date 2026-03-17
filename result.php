<?php
session_start();

// If no session data, go back to form
if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Application Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h2>Application Submitted Successfully</h2>

        <p><strong>Name:</strong>
            <?php echo $_SESSION['name']; ?>
        </p>

        <p><strong>Matric Number:</strong>
            <?php echo $_SESSION['matric']; ?>
        </p>

        <p><strong>Age:</strong>
            <?php echo $_SESSION['age']; ?>
        </p>

        <p><strong>Application Date:</strong>
            <?php echo $_SESSION['date']; ?>
        </p>

        <p><strong>Computer Type:</strong>
            <?php echo $_SESSION['computer']; ?>
        </p>

        <p><strong>Gender:</strong>
            <?php echo $_SESSION['gender']; ?>
        </p>

        <p><strong>Reason:</strong>
            <?php echo $_SESSION['reason']; ?>
        </p>

        <p><strong>Additional Items:</strong>
            <?php
            $items = [];

            if (!empty($_SESSION['software'])) {
                $items[] = $_SESSION['software'];
            }

            if (!empty($_SESSION['printer'])) {
                $items[] = $_SESSION['printer'];
            }

            if (count($items) > 0) {
                echo implode(", ", $items);
            } else {
                echo "None";
            }
            ?>
        </p>

        <br>

        <a href="index.php" class="btn">Back to Form</a>

    </div>

</body>

</html>