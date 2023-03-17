<?php

namespace Entity;

use Entity\Course;
use Entity\Teacher;

class Classroom
{
    public function __construct(Course $course, Teacher $teacher, array $students)
    {

    }
}