<?php
/**
 * Created by PhpStorm.
 * User: Dalton
 * Date: 2017-01-11
 * Time: 10:01 AM
 */

?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <?php
        include('student.php');

        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $second = new Student();
        $second->surname = "Danis";
        $second->first_name = "Dalton";
        $second->add_email('home','runjunior@gmail.com');
        $second->add_email('work','daltond@shaw.ca');
        $second->add_grade(99);
        $second->add_grade(99);
        $second->add_grade(99);
        $students['a954'] = $second;

        foreach ($students as $student) {
            echo $student->toString();
        }
        //echo "Hello out there... I live";
    ?>
    </body>
</html>
