<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "student_db";


$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$regno = $_POST['reg'];
$dob = $_POST['dob'];
$course = $_POST['course'];
$gender = $_POST['gender'];

// Insert into database
$sql = "INSERT INTO students (name, reg, dob, course, gender)
        VALUES ('$name', '$regno', '$dob', '$course', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo  "<script>
  alert('Registration successful!');
  window.location.href = 'form.html'; // redirect to your form file
</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
