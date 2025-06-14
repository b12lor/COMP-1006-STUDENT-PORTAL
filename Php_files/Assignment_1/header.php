<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : 'Student Portal' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="bg-dark text-white p-3 mb-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <!-- Logo shown on all pages -->
            <img src="img/Georgian%20logo.png" alt="Student Portal Logo" width="40" height="40" class="me-2">
            <h1 class="mb-0">Student Portal</h1>
        </div>
        <nav>
            <a href="index.php" class="text-white me-3">Add Student</a>
            <a href="view.php" class="text-white">View Students</a>
        </nav>
    </div>
</header>
