<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        // Initialize variables
        $name = $email = $password = "";

        // Function to sanitize user input
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $password = test_input($_POST["password"]);
        }
    ?>
    <h2>PHP Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" required>
        <br><br>
        
        Email: <input type="email" name="email" required>
        <br><br>
        
        Password: <input type="password" name="password" required>
        <br><br>
        <!-- <button type="submit">Submit</button> -->
        <input type="Submit" value="Register">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $pass = $_POST["password"];
        echo "<h2>Registration Successfull</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        // echo "Password: " . $pass . "<br>";
        
    }
    ?>

</body>
</html>