<!DOCTYPE html>
<html>

<head>
    <title>Computer Loan Application</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h2>Computer Loan Application Form</h2>

        <form action="process.php" method="POST">

            <label class="label">Student Name</label>
            <input type="text" name="name" class="input">

            <label class="label">Matric Number</label>
            <input type="text" name="matric" class="input">

            <label class="label">Age</label>
            <input type="number" name="age" class="input">

            <label class="label">Application Date</label>
            <input type="date" name="date" class="input">

            <label class="label">Computer Type</label>
            <select name="computer" class="input">
                <option value="">Select</option>
                <option value="Laptop">Laptop</option>
                <option value="Desktop">Desktop</option>
            </select>

            <label class="label">Reason</label>
            <textarea name="reason" class="textarea"></textarea>

            <label class="label">Gender</label>

            <input type="radio" name="gender" value="Male" class="radio"> Male
            <input type="radio" name="gender" value="Female" class="radio"> Female

            <br><br>

            <label class="label">Additional Items</label>

            <input type="checkbox" name="software" value="Software" class="check"> Software
            <input type="checkbox" name="printer" value="Printer" class="check"> Printer

            <br><br>

            <input type="submit" value="Submit" class="btn">
            <input type="reset" value="Reset" class="btn">

        </form>

    </div>

</body>

</html>