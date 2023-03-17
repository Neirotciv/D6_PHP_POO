<?php

// Constant for server root
define('ROOT', $_SERVER['DOCUMENT_ROOT']);

use Entity\Course;
use Entity\Teacher;
use Entity\Student;
use Autoload\Autoloader;

require_once './Autoload/Autoloader.php';

Autoloader::register();

// Create teachers
$phpTeacher = new Teacher('john', 'phashp', 'john@mail.com', 'H4h_a23p9vl@p');
echo $phpTeacher->getLastName();
// $jsTeacher = new Teacher('jean', 'jihesse', 'jean@mail.com', 'Jf9sc3dq@lm47');

// Create students
// $studentsList = [
//     $student1 = new Student('etudiant1', 'nom1', 'etudiant@nom1.com', 'H4h_a23p9vl@p'),
//     $student2 = new Student('etudiant2', 'nom2', 'etudiant@nom2.com', 'H4h_a23p9vl@p'),
//     $student3 = new Student('etudiant3', 'nom3', 'etudiant@nom3.com', 'H4h_a23p9vl@p'),
//     $student4 = new Student('etudiant4', 'nom4', 'etudiant@nom4.com', 'H4h_a23p9vl@p'),
//     $student5 = new Student('etudiant5', 'nom5', 'etudiant@nom5.com', 'H4h_a23p9vl@p'),
//     $student6 = new Student('etudiant6', 'nom6', 'etudiant@nom6.com', 'H4h_a23p9vl@p')
// ];

// // Create courses
// $phpCourse = new Course('PHP', $phpTeacher, $studentsList);
// $jsCourse = new Course('Javascript', $jsTeacher, $studentsList);

// $phpCourse->addAssignment('This is a course');

