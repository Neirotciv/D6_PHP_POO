<?php

use Autoload\Autoloader;
use Entity\Course;
use Entity\Teacher;
use Entity\Student;
use Entity\Classroom;
use Repository\courseRepository;
use Service\AuthenticationService;
use Service\HTMLHelper;

require_once 'Autoload/Autoloader.php';

Autoloader::register();

// Create teachers
$phpTeacher = new Teacher('john', 'phashp', 'john@mail.com', 'H4h_a23p9vl@p', 'PHP');

// Create course
$phpCourse = new Course('D6 - PHP POO', $phpTeacher);

// Create assignment
$teacherHelper = new courseRepository();
$assignement = $teacherHelper->depositAssignment($phpTeacher, $classroom, "19/03/2023", 100, $phpCourse);

// Create students
$students_list = array(
    $student1 = new Student('Jean', 'nom1', 'etudiant@nom1.com', 'H4h_a23p9vl@p'),
    $student2 = new Student('Jeanne', 'nom2', 'etudiant@nom2.com', 'H4h_a23p9vl@p'),
    $student3 = new Student('John', 'nom3', 'etudiant@nom3.com', 'H4h_a23p9vl@p'),
    $student4 = new Student('Alice', 'nom4', 'etudiant@nom4.com', 'H4h_a23p9vl@p'),
    $student5 = new Student('Pierre', 'nom5', 'etudiant@nom5.com', 'H4h_a23p9vl@p'),
    $student6 = new Student('Marie', 'nom6', 'etudiant@nom6.com', 'H4h_a23p9vl@p')
);

// Create classroom
$classroom = new Classroom('DFS27A');

// Student authentication with helper
$authentication_helper = AuthenticationService::getInstance();
$students_list[1]->setIsConnected(
    $authentication_helper->connexion('etudiant@nom1.com', 'H4h_a23p9vl@p', $students_list)
);

// Card for student info
echo HTMLHelper::card($students_list[0]); // Is connected
echo HTMLHelper::card($students_list[1]); // Is not connected