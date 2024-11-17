<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];

    // Database connection details
    $host = "localhost";
    $username = "root"; // default username
    $password = ""; // default password
    $dbname = "your_database_name"; // replace with your database name

    // Create connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to insert data
    $sql = "INSERT INTO contactform_entries (name, email, dni) VALUES ('$name', '$email', '$dni')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
}
?>