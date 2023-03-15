<?php

namespace App;

use App\Entity\Course;
use App\Entity\Teacher;
use App\Entity\Student;

/**
 * Manages the courses and students
 */
class CourseManager
{
    private static $instance = null;
    private array $courses = [];
    private array $students = [];

    /**
     * CourseManager constructor.
     * Private constructor to prevent direct instantiation.
     */
    private function __construct() {}

    /**
     * Retrieves the singleton instance of CourseManager.
     * @return CourseManager|null The singleton instance of CourseManager
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new CourseManager();
        }
        return self::$instance;
    }

    /**
     * Adds a new course to the system.
     * @param Course $course The course to add
     * @param Teacher $teacher The teacher for the course
     */
    public function addCourse(Course $course, Teacher $teacher)
    {
        $new_course = [
            'course' => $course,
            'teacher' => $teacher
        ];

        array_push($this->courses, $new_course);
        $course->setId(array_key_last($this->courses));
    }

    /**
     * Removes a course from the system by id.
     * @param int $id The id of the course to remove
     */
    public function removeCourse(int $id)
    {
        // Code to remove a course from the system by id
    }
    
    /**
     * Retrieves a course from the system by id.
     * @param int $id The id of the course to retrieve
     * @return Course|null The course with the specified id, or null if not found
     */
    public function getCourse(int $id)
    {
        // Code to retrieve a course from the system by id
    }
    
    /**
     * Adds a new student to the system.
     * @param Student $student The student to add
     */
    public function addStudent(Student $student)
    {
        // Code to add a student to the system
    }
}
