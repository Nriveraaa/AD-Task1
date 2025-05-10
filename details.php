<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Grades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Grade Details</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="details.ph">Details</a>
        </nav>
    </header>

    <main>
        <h2>Subjects and Scores</h2>
        <div class="grades">
            <?php
            //arrays of subjects and their scores
            $subjects = ["Math","English","AP","Science","CI"];
            $grades = [87, 77, 75, 93, 81];

            //loop for each subject
            for ($i = 0; $i < count($subjects); $i++) {
                //to determine pass or fail status
                $status = "Fail";
                if ($scores[$i] >=75) {
                    $status = "Pass";
                }
                //display subject, score, and status
                echo "<p>{$subjects[$i]}: {$scores[$i]} - <span class='" . strtolower($status) . "'>{$status}</span></p>";
            }
            ?>
        </div>
    </main>
</body>
</html>