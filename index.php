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
        <h1>Students Grades</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="details.php">Details</a>
        </nav>
    </header>

    <main>
        <h2>Grade Overview</h2>
        <div class="grades">
            <?php
            //arrays of students and their grades
            $students = ["Nicole","Charlie","Layla","Athena","Blair","Joseph"]
            $grades = [87, 98, 73, 79, 82]

            //to determine pass or fail status
            for ($i = 0; i < count($students); $i++){
                $status = "Fail";
                if ($grades[$i] >=75) {
                    $status = "Pass" ;
                }
                //display the results of their status
                echo "<p>{$students[$i]}: {$grades[$i]} - <span class='" . strtolower($status) . "'>{$status}</span></p>";
            }
            ?>
        </div>
    </main>

</body>
</html>