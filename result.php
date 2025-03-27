<?php
session_start();
$score = $_SESSION['score'] ?? 0;
session_destroy(); // Clear session data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .result { font-size: 22px; font-weight: bold; }
        .back { margin-top: 20px; display: inline-block; padding: 10px 20px; background: green; color: white; text-decoration: none; border-radius: 5px; }
        .back:hover { background: darkgreen; }
    </style>
</head>
<body>
    <div class="result">
        🎉 Your Score: <?= $score; ?>/4 🎯
    </div>
    <a class="back" href="index.php">Try Again</a>
</body>
</html>
