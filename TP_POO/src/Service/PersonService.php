<?php

namespace Service;

use Entity\Student;
use Entity\Teacher;
use Service\Interfaces\PersonServiceInterface;

class PersonService implements PersonServiceInterface
{
    /**
     * Creates a new teacher.
     * @param string $name The teacher's name.
     * @param string $lastname The teacher's last name.
     * @param string $email The teacher's email address.
     * @param string $password The teacher's password.
     * @return void
     */
    public function createTeacher(string $name, string $lastname, string $email, string $password)
    {
        $teacher = new Teacher($name, $lastname, $email, $password, null);
        return $teacher;
    }

    /**
     * Reads a teacher by email.
     * @param string $email The teacher's email address.
     * @param array $teachers An array of teachers to search in.
     * @return Teacher|null The teacher object if found, null otherwise.
     */
    public function readTeacher(string $email, array $teachers)
    {
        foreach ($teachers as $teacher) {
            if ($teacher->getEmail === $email) {
                return $teacher;
            }
        }
        return null;
    }

    /**
     * Updates a teacher.
     * @param Teacher $teacher The teacher object to update.
     * @param string $name The teacher's name.
     * @param string $lastname The teacher's last name.
     * @param string $email The teacher's email address.
     * @param string $password The teacher's password.
     * @return void
     */
    public function updateTeacher(Teacher $teacher, string $name, string $lastname, string $email, string $password)
    {
        $teacher->setName($name);
        $teacher->setLastname($lastname);
        $teacher->setEmail($email);
        $teacher->setPassword($password);
        return $teacher;
    }

     /**
     * Deletes a teacher by email.
     * @param string $email The teacher's email address.
     * @param array $teachers An array of teachers to search in.
     * @return void
     */
    public function deleteTeacher(string $email, array $teachers)
    {
        $teacher = $this->readTeacher($email, $teachers);
        if ($teacher !== null) {
            unset($teacher);
        }
    }

    /**
     * Creates a new student.
     * @param string $name The student's name.
     * @param string $lastname The student's last name.
     * @param string $email The student's email address.
     * @param string $password The student's password.
     * @return void
     */
    public function createStudent(string $name, string $lastname, string $email, string $password)
    {
        $teacher = new Student($name, $lastname, $email, $password);
        return $teacher;
    }

    /**
     * Reads a student by email.
     * @param string $email The student's email address.
     * @param array $students An array of students to search in.
     * @return Student|null The student object if found, null otherwise.
     */
    public function readStudent(string $email, array $students)
    {
        foreach ($students as $student) {
            if ($student->getEmail === $email) {
                return $student;
            }
        }
        return null;
    }

    /**
     * Updates a student.
     * @param Student $student The student object to update.
     * @param string $name The student's name.
     * @param string $lastname The student's last name.
     * @param string $email The student's email address.
     * @param string $password The student's password.
     * @return void
     */
    public function updateStudent(Student $student, string $name, string $lastname, string $email, string $password)
    {
        $student->setName($name);
        $student->setLastname($lastname);
        $student->setEmail($email);
        $student->setPassword($password);
    }

    /**
     * Deletes a student by email.
     * @param string $email The student's email address.
     * @param array $students An array of students to search in.
     * @return void
     */
    public function deleteStudent(string $email, array $students)
    {
        $student = $this->readStudent($email, $students);
        if ($student !== null) {
            unset($student);
        }
    }
}
