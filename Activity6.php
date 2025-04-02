<!-- Activity 6- Design Challenge --Include creating basic forms, validating inputs, handling file uploads, and dynamically populating form elements, 
with a final task to build a survey form using GET and POST methods to collect and display user information. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
</head>
<body>

<h2>User Survey Form</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $age = intval($_POST["age"]);
    $gender = $_POST["gender"];
    $upload_dir = "uploads/";

    // File upload validation
    $allowed_types = ["image/png", "image/jpeg", "image/jpg"];
    $file = $_FILES["profile_pic"];
    $file_name = basename($file["name"]);
    $file_tmp = $file["tmp_name"];
    $file_type = $file["type"];
    $file_size = $file["size"];

    if (!$email) {
        echo "<p style='color:red;'>Invalid email format.</p>";
    } elseif (!in_array($file_type, $allowed_types)) {
        echo "<p style='color:red;'>Invalid file type. Only PNG, JPG, and JPEG are allowed.</p>";
    } elseif ($file_size > 2000000) {
        echo "<p style='color:red;'>File too large. Max size: 2MB.</p>";
    } else {
        // Move file to upload directory
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $file_path = $upload_dir . $file_name;
        move_uploaded_file($file_tmp, $file_path);

        // Display user details
        echo "<h2>Survey Submission</h2>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Age: $age <br>";
        echo "Gender: $gender <br>";
        echo "Profile Picture: <br><img src='$file_path' width='150' height='150'><br>";
    }
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Age:</label>
    <input type="number" name="age" min="10" max="100" required><br><br>

    <label>Gender:</label>
    <select name="gender" required>
        <option value="">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Upload Profile Picture:</label>
    <input type="file" name="profile_pic" accept="image/*" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

