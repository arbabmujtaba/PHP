<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "Trip";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO Trip (Name, Age, Gender, Email, phone, Other, Dt)
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

    if (mysqli_query($con, $sql)) {
        $success = "Form submitted successfully!";
    } else {
        $error = "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h3>Welcome to IET DAVV</h3>
    <p>Enter your details to confirm participation in the upcoming trip.</p>

    <?php
    if (isset($success)) {
        echo "<p style='color:green;'>$success</p>";
    }
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form action="index.php" method="post">

        <input type="text" name="name" placeholder="Enter Your Name" required>

        <input type="number" name="age" placeholder="Enter Your Age" required>

        <input type="text" name="gender" placeholder="Enter Your Gender" required>

        <input type="email" name="email" placeholder="Enter Your Email" required>

        <input type="text" name="phone" placeholder="Enter Your Phone" required>

        <textarea name="other" placeholder="Enter additional info" rows="5"></textarea>

        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn">Reset</button>

    </form>
</div>

</body>
</html>
