<?php

namespace App\Entity;

use App\Entity\Person;

require_once 'Person.php';

class Student extends Person
{
    private array $marks;
    private array $assignments;

     /**
     * Adds a new mark for the student.
     * @param int $course_id The identifier of the course related to the mark
     * @param int $assignment_id The identifier of the assignment related to the mark
     * @param float $mark The mark value to be added
     * @return void
     */
    public function newMark(int $course_id, int $assignment_id, float $mark)
    {
        $new_mark = [
            'course_id' => $course_id, 
            'assignment_id' => $assignment_id, 
            'mark' => $mark
        ];
        array_push($this->marks, $new_mark);
    }

    /**
     * Submits a new assignment for the student.
     * @param int $course_id The identifier of the course related to the assignment
     * @param mixed $assignment The object representing the new assignment to be submitted
     * @return void
     */
    public function submitAssignment($course_id, $assignment)
    {
        $new_assignment = [
            'course_id' => $course_id,
            'assignment' => $assignment
        ];
        $this->assignments[] = $new_assignment;
    }
}
