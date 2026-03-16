<!DOCTYPE html>
<html>

<head>
    <title>Application Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h2>Application Submitted</h2>

        <p><strong>Name:</strong>
            <?php echo $_GET['name']; ?>
        </p>

        <p><strong>Matric Number:</strong>
            <?php echo $_GET['matric']; ?>
        </p>

        <p><strong>Age:</strong>
            <?php echo $_GET['age']; ?>
        </p>

        <p><strong>Date:</strong>
            <?php echo $_GET['date']; ?>
        </p>

        <p><strong>Computer Type:</strong>
            <?php echo $_GET['computer']; ?>
        </p>

        <p><strong>Gender:</strong>
            <?php echo $_GET['gender']; ?>
        </p>

        <p><strong>Reason:</strong>
            <?php echo $_GET['reason']; ?>
        </p>

        <br>

        <a href="index.php" class="btn">Back to Form</a>

    </div>

</body>

</html>