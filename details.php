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
            $subjects = ["Math","English","AP","Science","CI"];
            $grades = [87, 77, 75, 93, 81];
            ?>
        </div>
    </main>
</body>
</html>