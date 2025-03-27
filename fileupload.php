<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" required>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";
if(isset($_POST["submit"]))
{
    
if($_FILES["fileToUpload"]["size"]>2339010)
{
    if(in_array($_FILES["fileToUpload"]["type"],["png",'jpeg','jpg']))
    {
      echo "file Uploaded";    
    }
    else{
        echo "Extension wrong";
    }
    echo "file Have Too Many Size";
}
else{
    echo "file Uploaded";
}

}
?>