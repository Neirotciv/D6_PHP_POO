<?php

namespace Entity;

use App\Entity\Course;
use App\Entity\Teacher;

class Classroom
{
    public function __construct(Course $course, Teacher $teacher, array $students)
    {

    }
}