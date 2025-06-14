<?php
// --- index.php --- (Form Page)
$pageTitle = "Add Student";
include 'header.php';
?>

<main class="container mt-5">
    <h2>Add Student Record</h2>
    <form method="post" action="add.php">
        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mb-3">
            <label for="student_id" class="form-label">Student ID</label>
            <input type="text" class="form-control" name="student_id" id="student_id" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="number" class="form-control" name="grade" id="grade" min="0" max="100" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
    </form>
</main>

<?php include 'footer.php'; ?>
