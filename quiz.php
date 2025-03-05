<?php
session_start(); // Start session to store quiz data

// Quiz questions and answers
$questions = [
    "What is the capital of France?" => ["Paris", "London", "Berlin", "Rome"],
    "Which language is used for web development?" => ["Python", "Java", "PHP", "C++"],
    "What is 5 + 3?" => ["5", "8", "10", "15"],
    "Which planet is known as the Red Planet?" => ["Earth", "Mars", "Jupiter", "Venus"]
];

// Correct answers
$correct_answers = ["Paris", "PHP", "8", "Mars"];

// Function to calculate score
function calculateScore($user_answers, $correct_answers) {
    $score = 0;
    for ($i = 0; $i < count($correct_answers); $i++) {
        if (isset($user_answers[$i]) && $user_answers[$i] === $correct_answers[$i]) {
            $score++;
        }
    }
    return $score;
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_answers = $_POST['answers'] ?? [];
    $score = calculateScore($user_answers, $correct_answers);
    $_SESSION['score'] = $score;
    header("Location: result.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz App</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .container { max-width: 600px; margin: auto; }
        .question { font-size: 18px; margin-bottom: 10px; }
        .options { margin-bottom: 20px; }
        button { padding: 10px 20px; background: blue; color: white; border: none; cursor: pointer; }
        button:hover { background: darkblue; }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Quiz</h2>
        <form method="POST">
            <?php
            $index = 0;
            foreach ($questions as $question => $options) {
                echo "<div class='question'>$question</div>";
                echo "<div class='options'>";
                foreach ($options as $option) {
                    echo "<label><input type='radio' name='answers[$index]' value='$option' required> $option</label><br>";
                }
                echo "</div>";
                $index++;
            }
            ?>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
