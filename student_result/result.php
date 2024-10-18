<?php
    function resultFunc($s1, $s2, $s3, $s4, $s5)
    {
        $rangeMessage = "Mark range is invalid.";
        $failedMessage = "You have failed";
        if (markRangeValidation($s1, $s2,  $s3, $s4, $s5)) {
            print($rangeMessage);
        } else if (subFailedValidation($s1, $s2,  $s3, $s4, $s5)) {
            print($failedMessage);
        } else {
            $totalMarks = $s1 + $s2 + $s3 + $s4 + $s5;
            $averageMarks = $totalMarks / 5;
            print("Total Marks: " . $totalMarks . "\n");
            print("Average Marks: " . $averageMarks . "\n");
            gradeCalculation($averageMarks);
        }
    }


    function markRangeValidation($sub1, $sub2,  $sub3, $sub4, $sub5)
    {
        if ($sub1 < 0 || $sub1 > 100) {
            return true;
        } else if ($sub2 < 0 || $sub2 > 100) {
            return true;
        } else if ($sub3 < 0 || $sub3 > 100) {
            return true;
        } else if ($sub4 < 0 || $sub4 > 100) {
            return true;
        } else if ($sub5 < 0 || $sub5 > 100) {
            return true;
        } else {
            return false;
        }
    }

    function subFailedValidation($sub1, $sub2,  $sub3, $sub4, $sub5)
    {
        if ($sub1 < 33 || $sub2 < 33 || $sub3 < 33 || $sub4 < 33 || $sub5 < 33) {
            return true;
        } else {
            return false;
        }
    }

    function gradeCalculation($averageMarks)
    {
        switch ($averageMarks) {
            case ($averageMarks >= 80 && $averageMarks <= 100):
                print("Grade: A+");
                break;
            case ($averageMarks >= 70 && $averageMarks <= 79):
                print("Grade: A");
                break;
            case ($averageMarks >= 60 && $averageMarks <= 69):
                print("Grade: A-");
                break;
            case ($averageMarks >= 50 && $averageMarks <= 59):
                print("Grade: B");
                break;
            case ($averageMarks >= 40 && $averageMarks <= 49):
                print("Grade: C");
                break;
            case ($averageMarks >= 33 && $averageMarks <= 39):
                print("Grade: D");
                break;
            default:
                print("Grade: F");
        }
    }
    
    resultFunc(90, 90, 55, 60, 55);
