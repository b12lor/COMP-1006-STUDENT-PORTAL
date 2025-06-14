<?php

//require other classes
include "crud.php";
include "validate.php";

$crud = new crud();
$validate = new validate();

//an if statement to  details has been submitted
if (isset($_POST["submit"])) {
    $age = $crud->escapeString($_POST["age"]);
    $gender = $crud->escapeString($_POST["gender"]);
    $stId = $crud->escapeString($_POST["student_id"]);
    $grade = $crud->escapeString($_POST["grade"]);
    $name = $crud->escapeString($_POST["name"]);


    $msg = $validate->checkEmpty($_POST, array("name", "age", "gender", "student_id", "grade"));
    $checkAge = $validate->validAge($_POST['age']);
    $checkGender = $validate->validGender($_POST['gender']);
    $checkStid = $validate->validStid($_POST['student_id']);
    $checkGrade = $validate->validGrade($_POST['grade']);



    if (!empty($_POST['check_list'])) {
        $chk = ""; // Initialize it before the loop
        foreach ($_POST['check_list'] as $chk1) {
            $chk .= $chk1 . " ";
        }
    }

    if ($msg != null) {
        echo "<p>$msg</p>";
        echo "<a href='javascript:self.history.back()'>Go Back</a>";

    }
    elseif (!$checkAge){
        echo "<p>You entered a wrong age(Make sure you didn't enter a string(letters))<p/>";
    }
    else if (!$checkGender){
        echo "<p>You entered an invalid gender<p/>";
    }
    else if(!$checkStid){
        echo "<p>You entered a wrong student id<p/>";
    }
    else if (!$checkGrade){
        echo"<p>You entered a wrong grade<p/>";
    }

    $query = "INSERT INTO students (name, age, gender, student_id, student_grade) 
          VALUES ('$name', '$age', '$gender', '$stId', '$grade')";



    $result = $crud->execute($query);

    if ($result) {
        echo "<p>Student has been added successfully!</p>";
    }
    else {
        echo "<p>There's an error when trying to add the student. Please try again.</p>";
    }
}

?>

