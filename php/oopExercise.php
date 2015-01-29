<?php
    /*include_once('classes/Bkiict.php');*/
    function __autoload($class_name) {
        include_once 'classes/'.$class_name.'.php';
    }

    $bkiict=new Bkiict();
    echo $bkiict->fullname;

    $student=new Student();
    echo $student->firstname;
echo "<br />";

var_dump($student);

$course = new Course();
echo $course->title;
echo "<br />";
$course->title='Course title';//dynamic overloading
echo $course->title;
"<br />";
var_dump($course);