<?php
include('db.php');

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <input type="text" name="name" value="<?php echo $student['name']; ?>" required>
        <input type="email" name="email" value="<?php echo $student['email']; ?>" required>
        <input type="number" name="age" value="<?php echo $student['age']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
