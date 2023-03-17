<?php

namespace Repository;

use Entity\Student;
use Entity\Assignment;

class courseRepository
{    
    /**
     * submitAssignment
     *
     * @param  Student $student Student who submit his assignment
     * @param  float $mark Mark obtained on this assignment (0 by default when assignment is not rewiewed)
     * @param  string $content Assignment submitted by the Student
     * @param  Assignment $assignment Assignment submitted by the teacher
     * @return void
     */
    public function submitAssignment(Student $student, float $mark, string $content, Assignment $assignment)
    {

    }
}