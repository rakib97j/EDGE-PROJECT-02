<?php 
include 'db.php'; 
include 'navbar.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<div class="container">
    <h2>Student List</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Course Name</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6" class="text-center">No data available</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>