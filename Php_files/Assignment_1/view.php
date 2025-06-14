<?php
// --- view.php --- (View Page)
$pageTitle = "View Students";
include 'header.php';
include 'crud.php';

$crud = new crud();
$result = $crud->getData("SELECT * FROM students");
?>

<main class="container">
    <h2 class="mb-4">Student Records</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Student ID</th>
                <th>Student Grade</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($result)): ?>
                <?php foreach($result as $res): ?>
                    <tr>
                        <td><?= htmlspecialchars($res['name']) ?></td>
                        <td><?= htmlspecialchars($res['gender']) ?></td>
                        <td><?= htmlspecialchars($res['age']) ?></td>
                        <td><?= htmlspecialchars($res['student_id']) ?></td>
                        <td><?= htmlspecialchars($res['student_grade']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No student records found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>
