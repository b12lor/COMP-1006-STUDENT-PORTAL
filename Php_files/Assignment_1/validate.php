<?php
class validate
{
    //check if the data is empty using for each loop
    public function checkEmpty($data, $field)
    {
        $msg = null;
        foreach ($field as $value) {
            if (empty($data[$value])) {
                $msg .= "<p> $value field empty</p>";
            }
        }
        return $msg;
    }

    //this function checks if the grade is a valid grade(from 0 - 100 )
    public function validGrade($grade)
    {
        if (is_numeric($grade) && $grade >= 0 && $grade <= 100) {
            return true;
        }
    }

    //this function checks if the age entered is a valid age and if age is greater than 0 and less than 50
    public function validAge($age)
    {
        if (is_numeric($age) && $age >= 0 && $age <= 50) {
            return true;
        } else {
            return false;
        }
    }

    //this function checks if the gender is a valid gender,
    public function validGender($gender)
    {
        if ($gender == "male") {
            return "Male";
        } elseif ($gender == "Female") {
            return "Female";
        } else {
            return "Other";
        }
    }

    public function validStid($stId)
    {
        //this function only allows numbers 0-9
        if (preg_match('/^[0-9]+$/', $stId)) {
            return true;
        } else {
            return false;
        }
    }
}