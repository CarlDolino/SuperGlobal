<?php
session_start(); // Start the session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Information</title>
</head>
<body>

<h2>Display Submitted Information</h2>

<?php
if (isset($_SESSION['student_info'])) {
    // Display processed data from the session
    foreach ($_SESSION['student_info'] as $key => $value) {
        echo "<p><strong>$key:</strong> $value</p>";
    }
} else {
    echo "<p>No data available. Please submit the form first.</p>";
}
?>

<p><a href="student_form.php">Go back to the form</a></p>

</body>
</html>