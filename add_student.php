<?php 
include 'db.php'; 
include 'navbar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course_name'];

    $sql = "INSERT INTO students (name, student_id, phone, email, course_name) 
            VALUES ('$name', '$student_id', '$phone', '$email', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success container'>Student Added Successfully!</div>";
    } else {
        echo "<div class='alert alert-danger container'>Error: " . $conn->error . "</div>";
    }
}
?>

<div class="container">
    <h2>Add New Student</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="student_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>