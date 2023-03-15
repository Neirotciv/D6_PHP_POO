<?php

namespace App;

use App\CourseManager;
use App\Entity\Course;
use App\Entity\Teacher;
use App\Entity\Student;

require('./CourseManager.php');
require('./Entity/Course.php');
require('./Entity/Teacher.php');

// Create courses
$phpCourse = new Course('PHP');
$jsCourse = new Course('Javascript');

// Create teachers
$phpTeacher = new Teacher('john', 'phashp');
$phpTeacher->setSubject('PHP');
$jsTeacher = new Teacher('jean', 'jihesse');
$jsTeacher->setSubject('Javascript');

// Course manager using Singleton
$classroom = CourseManager::getInstance();
// The course and the teacher are associated
$classroom->addCourse($phpCourse, $phpTeacher);
$classroom->addCourse($jsCourse, $jsTeacher);

echo $phpTeacher;