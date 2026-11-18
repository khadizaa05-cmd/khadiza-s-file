<!DOCTYPE html>
<html>
<head>
    <title>Student Result System</title>
</head>
<body>

    <h2>Student Result System</h2>

    <form method="POST">

        Student Name:
        <input type="text" name="name" required>
        <br><br>

        Student ID:
        <input type="text" name="id" required>
        <br><br>

        Department:
        <select name="department">
            <option>CSE</option>
            <option>EEE</option>
            <option>BBA</option>
        </select>
        <br><br>

        English Marks:
        <input type="number" name="english" min="0" max="100" required>
        <br><br>

        Math Marks:
        <input type="number" name="math" min="0" max="100" required>
        <br><br>

        Computer Marks:
        <input type="number" name="computer" min="0" max="100" required>
        <br><br>

        <input type="submit" name="submit" value="Show Result">

    </form>

    <?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $department = $_POST['department'];

        $english = (int)$_POST['english'];
        $math = (int)$_POST['math'];
        $computer = (int)$_POST['computer'];

        if($english > 100 || $math > 100 || $computer > 100)
        {
            echo "Marks cannot be more than 100.";
        }
        else
        {
            $total = $english + $math + $computer;
            $average = $total / 3;

            if($english < 40 || $math < 40 || $computer < 40)
            {
                $grade = "F";
                $status = "Fail";
            }
            else if($average >= 80)
            {
                $grade = "A+";
                $status = "Pass";
            }
            else if($average >= 70)
            {
                $grade = "A";
                $status = "Pass";
            }
            else if($average >= 60)
            {
                $grade = "B";
                $status = "Pass";
            }
            else if($average >= 50)
            {
                $grade = "C";
                $status = "Pass";
            }
            else
            {
                $grade = "D";
                $status = "Pass";
            }

            echo "<h2>Student Result</h2>";

            echo "Name: $name <br>";
            echo "ID: $id <br>";
            echo "Department: $department <br>";
            echo "English: $english <br>";
            echo "Math: $math <br>";
            echo "Computer: $computer <br>";

            echo "Total Marks: $total <br>";
            echo "Average: " . number_format($average, 2) . "<br>";
            echo "Grade: $grade <br>";
            echo "Result: $status <br>";
        }
    }

    ?>

</body>
</html>