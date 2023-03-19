<?php

namespace Service\Interfaces;

use Entity\Student;
use Entity\Teacher;


interface PersonServiceInterface
{
    /**
     * Creates a new teacher.
     * @param string $name The teacher's name.
     * @param string $lastname The teacher's last name.
     * @param string $email The teacher's email address.
     * @param string $password The teacher's password.
     * @return void
     */
    public function createTeacher(string $name, string $lastname, string $email, string $password);

    /**
     * Reads a teacher by email.
     * @param string $email The teacher's email address.
     * @param array $teachers An array of teachers to search in.
     * @return Teacher|null The teacher object if found, null otherwise.
     */
    public function readTeacher(string $email, array $teachers);

    /**
     * Updates a teacher.
     * @param Teacher $teacher The teacher object to update.
     * @param string $name The teacher's name.
     * @param string $lastname The teacher's last name.
     * @param string $email The teacher's email address.
     * @param string $password The teacher's password.
     * @return void
     */
    public function updateTeacher(Teacher $teacher, string $name, string $lastname, string $email, string $password);

    /**
     * Deletes a teacher by email.
     * @param string $email The teacher's email address.
     * @param array $teachers An array of teachers to search in.
     * @return void
     */
    public function deleteTeacher(string $email, array $teachers);

    /**
     * Creates a new student.
     * @param string $name The student's name.
     * @param string $lastname The student's last name.
     * @param string $email The student's email address.
     * @param string $password The student's password.
     * @return void
     */
    public function createStudent(string $name, string $lastname, string $email, string $password);

    /**
     * Reads a student by email.
     * @param string $email The student's email address.
     * @param array $students An array of students to search in.
     * @return Student|null The student object if found, null otherwise.
     */
    public function readStudent(string $email, array $students);

    /**
     * Updates a student.
     * @param Student $student The student object to update.
     * @param string $name The student's name.
     * @param string $lastname The student's last name.
     * @param string $email The student's email address.
     * @param string $password The student's password.
     * @return void
     */
    public function updateStudent(Student $student, string $name, string $lastname, string $email, string $password);

    /**
     * Deletes a student by email.
     * @param string $email The student's email address.
     * @param array $students An array of students to search in.
     * @return void
     */
    public function deleteStudent(string $email, array $students);
}
