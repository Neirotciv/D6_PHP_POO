<?php

namespace Entity;

class Assignment
{
    private Teacher $teacher;
    private Classroom $classroom;
    private string $deadline;
    private float $mark_max;
    private Course $course;

    /**
     * Constructor for the Assignment
     * @param Teacher $teacher The teacher responsible for the assignment
     * @param Classroom $classroom The classroom where the assignment is to be submitted
     * @param string $deadline The deadline for submitting the assignment
     * @param float $mark_max The maximum mark for the assignment
     * @param Course $course The course to which the assignment is associated.
     */
    public function __construct(Teacher $teacher, Classroom $classroom, string $deadline, float $mark_max, Course $course)
    {
        $this->teacher = $teacher;
        $this->classroom = $classroom;
        $this->deadline = $deadline;
        $this->mark_max = $mark_max;
        $this->course = $course;
    }

    // Getters

    public function getTeacher()
    {
        return $this->teacher;
    }

    public function getClassroom()
    {
        return $this->classroom;
    }

    public function getDeadline()
    {
        return $this->deadline;
    }

    public function getMarkMax()
    {
        return $this->mark_max;
    }

    public function getCourse()
    {
        return $this->course;
    }

    // Setters

    public function setTeacher(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function setClassroom(Classroom $classroom)
    {
        $this->classroom = $classroom;
    }

    public function setDeadline(string $deadline)
    {
        $this->deadline = $deadline;
    }

    public function setMarkMax(float $mark_max)
    {
        $this->mark_max = $mark_max;
    }

    public function setCourse(Course $course)
    {
        $this->course = $course;
    }
}
