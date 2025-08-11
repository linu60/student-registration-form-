<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $regno = $_POST['reg'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];

    $sql = "UPDATE students SET 
        name='$name', 
        regno='$regno', 
        dob='$dob', 
        course='$course', 
        gender='$gender' 
        WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
