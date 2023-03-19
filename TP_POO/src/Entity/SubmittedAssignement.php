<?php

namespace Entity;

use Entity\Student;
use Entity\Assignment;

/**
 * Represents a submitted assignment by a student.
 */
class SubmittedAssignement
{
    private Student $student;
    private float $mark;
    private string $content;
    private Assignment $assignment;

    /**
     * SubmittedAssignement constructor.
     * @param Student $student The student who submitted the assignment.
     * @param float $mark The mark received for the assignment.
     * @param string $content The content of the assignment
     * @param Assignment $assignment The teacher assignment
     */
    public function __construct(Student $student, float $mark, string $content, Assignment $assignment)
    {
        $this->student = $student;
        $this->mark = $mark;
        $this->content = $content;
        $this->assignment = $assignment;
    }

    // Getters
    
    public function getStudent()
    {
        return $this->student;
    }

    public function getMark()
    {
        return $this->mark;
    }

    public function getContent()
    {   
        return $this->content;
    }

    public function getAssignment()
    {
        return $this->assignment;
    }

    // Setters

    public function setNote(float $mark)
    {
        $this->mark = $mark;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}   