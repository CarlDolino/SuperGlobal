<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Form</title>
</head>
<body>

<h2>Processed Student Information</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data submitted with POST
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $course_year = $_POST["course_year"];
    $enrolled = $_POST["enrolled"];
    $subject = $_POST["subject"];
    $grade = $_POST["grade"];

    // Displaying processed data
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Middle Name:</strong> $middle_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Course and Year:</strong> $course_year</p>";
    echo "<p><strong>Enrolled:</strong> $enrolled</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><strong>Grade:</strong> $grade</p>";

    // You can also access data submitted with GET here
    $additionalInfo = "";
    if (isset($_GET["additional_info"])) {
        $additionalInfo = $_GET["additional_info"];
        echo "<p><strong>Additional Info (from GET):</strong> $additionalInfo</p>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>