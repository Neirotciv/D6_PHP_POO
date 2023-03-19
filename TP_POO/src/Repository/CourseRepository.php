<?php

namespace Repository;

use Entity\Student;
use Entity\Teacher;
use Entity\Classroom;
use Entity\Course;
use Entity\Assignment;
use Entity\SubmittedAssignement;

class courseRepository
{    
    /**
     * depositAssignment
     * @param Teacher $teacher Teacher who submit his assignment
     * @param Classroom $classroom The classroom
     * @param deadline $ deadline The deadline of the assignment
     * @param float $mark_max The maximum of the mark
     * @param course $course The course for which the assignment is deposited
     * @return Assignment The assignment of the course
     */
    public function depositAssignment(Teacher $teacher, Classroom $classroom, string $deadline, float $mark_max, Course $course)
    {
        return new Assignment($teacher, $classroom, $deadline, $mark_max, $course);
    }

    /**
     * submitAssignment
     * @param  Student $student Student who submit his assignment
     * @param  float $mark Mark obtained on this assignment (0 by default when assignment is not rewiewed)
     * @param  string $content Assignment submitted by the Student
     * @param  Assignment $assignment Assignment submitted by the teacher
     * @return SubmittedAssignement Assignment submitted by the student
     */
    public function submitAssignment(Student $student, float $mark, string $content, Assignment $assignment)
    {
        return new SubmittedAssignement($student, $mark, $content, $assignment);
    }
}