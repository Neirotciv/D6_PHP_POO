<?php

namespace Entity;

/**
 * Represents a course entity
 */
class Course
{
    private string $name;
    private Teacher $teacher;

    /**
     * Course constructor.
     *
     * @param string $name The name of the course
     * @param Teacher $teacher The teacher of the course
     * @param array $students_list The list of students enrolled in the course
     */
    public function __construct(string $name, Teacher $teacher)
    {
        $this->name = $name;
        $this->teacher = $teacher;
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

    // Setters

    public function setName(string $name)
    {
        $this->name = $name;
    }
}