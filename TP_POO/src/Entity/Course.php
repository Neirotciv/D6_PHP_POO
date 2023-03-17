<?php

namespace App\Entity;

/**
 * Represents a course entity
 */
class Course
{
    private string $name;
    private Teacher $teacher;
    private array $assignments = [];
    private array $students = [];
    private array $course_supports = [];

    /**
     * Course constructor.
     *
     * @param string $name The name of the course
     * @param Teacher $teacher The teacher of the course
     * @param array $students_list The list of students enrolled in the course
     */
    public function __construct(string $name, Teacher $teacher, array $students_list)
    {
        $this->name = $name;
        $this->teacher = $teacher;
        $this->addStudentsList($students_list);
    }

    // Getters

    public function getName()
    {
        return $this->name;
    }

    public function getTeacher()
    {
        return $this->teacher;
    }

    public function getCourseSupport()
    {
        return $this->course_supports;
    }

    // Setters

    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Add a support material to the course.
     * @param mixed $support The support material to add
     */
    public function setCourseSupport($support) {
        $this->course_supports[] = $support;
    }

    /**
     * Add an assignment to the course.
     * @param mixed $assignment The assignment to add
     */
    public function addAssignment($assignment) {
        $this->assignments[] = $assignment;
    }

    /**
     * Submit an assignment for the course by a student.
     * @param Student $student The student who is submitting the assignment
     */
    public function submitAssignment(Student $student) {
        
    }

     /**
     * Add a student to the course.
     * @param Student $student The student to add
     */
    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

     /**
     * Add a list of students to the course.
     * @param array $students_list The list of students to add
     */
    public function addStudentsList(array $students_list)
    {
        array_merge($this->students, $students_list);
    }
}