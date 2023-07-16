<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Add custom CSS for decorative fonts -->
    <style>
        body {
            font-family: 'Your Decorative Font', cursive;
        }
    </style>
</head>
<body style="padding: 50px 0 0 140px">
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $birth_place = $_POST["birth_place"];
        $birth_date = $_POST["birth_date"];
        $religion = $_POST["religion"];
        $major = $_POST["major"];
        $gender = $_POST["gender"];
        $hobby = isset($_POST["hobby"]) ? implode(", ", $_POST["hobby"]) : "";
        $address = $_POST["address"];

        // Displaying the submitted data
        echo "Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  : " . $name . "<br>";
        echo "Email&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  : " . $email . "<br>";
        echo "Tempat Lahir&nbsp;: " . $birth_place . "<br>";
        echo "Tanggal Lahir  : " . $birth_date . "<br>";
        echo "Agama&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  : " . $religion . "<br>";
        echo "Jurusan&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; : " . $major . "<br>";
        echo "Jenis Kelamin : " . $gender . "<br>";
        echo "Hobby&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : " . $hobby . "<br>";
        echo "Alamat&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; : " . $address . "<br>";
    }
    ?>

    <!-- Add Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Add a button with a link to "login.php" -->
    <a class="btn btn-primary" href="login.php" style="margin: 20px 0px">Back to Login</a>
</body>
</html>



